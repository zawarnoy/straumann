(function() {
    const filters = {};
    const showAllText = {
        topic: 'Все темы',
        country: 'Все страны',
        date: 'Все месяцы',
    }
    let staticScrollY;

    const filtersBlock = document.getElementById('filters');

    [...filtersBlock.querySelectorAll('[data-filter-type]')].forEach(item => {
        const filterType = item.dataset.filterType
        filters[filterType] = {};

        const options = item.querySelectorAll('[data-filter-option]');
        [...options].forEach(optionElem => {
            filters[filterType][optionElem.dataset.filterOption] = false;
        })
    });

    const filtersRect = filtersBlock.getBoundingClientRect();
    const header = document.getElementsByTagName('header')[0];

    placeFilters();

    window.addEventListener('scroll', placeFilters);
    window.addEventListener('resize', placeFilters);

    function placeFilters() {
        const classWithPadding = 'events-block_pt';
        const headerRect = header.getBoundingClientRect();
        if (headerRect.height + window.scrollY > document.getElementsByClassName('banner')[0].offsetHeight) {
            filtersBlock.style.position = 'fixed';
            filtersBlock.style.top = headerRect.height + 'px';
            document.getElementsByClassName('events-block')[0].classList.add(classWithPadding);
        } else {
            filtersBlock.style = '';
            document.getElementsByClassName('events-block')[0].classList.remove(classWithPadding);
        }
    }

    const stopPropagation = (e) => e.stopPropagation();

    [...document.querySelectorAll('.filters__selector-container')].forEach(item => {
        item.addEventListener('click', handleFilterDropdown);
        item.addEventListener('click', stopPropagation);
    });
    function handleFilterDropdown(e) {
        const currTarget = e.currentTarget;
        const filterType = currTarget.dataset.filterType;
        if (!filterType) {
            return;
        }

        const shadow = document.getElementById('shadow');
        const classActive = 'active';
        const isAlreadyActive = currTarget.classList.contains(classActive);

        [...document.querySelectorAll('.active')].forEach(item => item.classList.remove(classActive))

        if (isAlreadyActive) {
            shadow.classList.remove(classActive);
            return;
        }

        if (!currTarget.classList.contains('filters__item_modal')) {
            shadow.classList.add(classActive);
        }

        const menu = document.querySelector(`[data-filter-menu="${filterType}"]`);
        menu.classList.add(classActive);
        currTarget.classList.add(classActive);
    }

    document.addEventListener('click', (e) => {
        [...document.querySelectorAll('.active')].forEach(item => item.classList.remove('active'))
    });

    [...document.querySelectorAll('.filter__option-list')].forEach(item => {
        item.addEventListener('click', stopPropagation);
        item.addEventListener('click', onOptionClick)
    });
    function onOptionClick(e) {
        const filterOption = e.target.dataset.filterOption;
        if (!filterOption) {
            return;
        }

        const classActive = 'checked';
        const checkbox = e.target.querySelector('input');
        const filterType = e.target.parentNode.dataset.filterMenu;

        filters[filterType][filterOption] = !checkbox.checked;
        checkbox.checked = checkbox.checked ? '' : 'checked';
        [...document.querySelectorAll(`[data-filter-type="${filterType}"] [data-filter-option="${filterOption}"]`)]
            .forEach(item => checkbox.checked ? item.classList.add(classActive) : item.classList.remove(classActive));
        updateSelectedFiltersText();

        filterEvents();
    }

    function updateSelectedFiltersText() {
        const checkedFiltersTexts = {};

        Object.keys(filters).forEach(filterKey => {
            const filterElements = document.querySelectorAll(`[data-filter-type="${filterKey}"]`);
            checkedFiltersTexts[filterKey] = [];
            const targetArray = checkedFiltersTexts[filterKey];

            Object.keys(filters[filterKey]).forEach(optionKey => {
                if (!filters[filterKey][optionKey]) {
                    return;
                }

                if (!targetArray) {
                    targetArray = [];
                }
                const text = filterElements[0].querySelector(`[data-filter-option="${optionKey}"]`).innerText;
                targetArray.push(text);
            });
            [...filterElements].map(elem => elem.querySelectorAll('.filter__subtitle'))
                .reduce((prev, curr) => prev.concat([...curr]), [])
                .forEach(elem => {
                    elem.innerText = targetArray.length ? targetArray.join(', ') : showAllText[filterKey];
                });
        });
    }

    function filterEvents() {
        const allUnchecked = Object.entries(filters).map(entry => entry[1]).every(item => Object.entries(item).every(item => item[1] === false));
        const events = [...document.querySelectorAll('.event')];
        const classHidden = 'hidden';
        const emptyStateBlock = document.getElementById('emptyState');

        if (allUnchecked) {
            emptyStateBlock.classList.add(classHidden);
            events.forEach(eventBlock => eventBlock.classList.remove(classHidden));
            return;
        }

        const toShow = [];

        events.forEach(event => {
            const dataset = event.dataset;
            if (!dataset) {
                return;
            }

            const showEvent = Object.keys(filters).every(filterKey => {
                return Object.keys(filters[filterKey]).every(optionKey => {
                    return filters[filterKey][optionKey] ? (dataset[filterKey] ? dataset[filterKey].split(';').includes(optionKey) : false) : true;
                });
            });

            if (showEvent) {
                toShow.push(event);
            }
        });

        events.forEach(eventBlock => toShow.includes(eventBlock) ? eventBlock.classList.remove(classHidden) : eventBlock.classList.add(classHidden));
        toShow.length === 0 ? emptyStateBlock.classList.remove(classHidden) : emptyStateBlock.classList.add(classHidden);
    }

    document.getElementsByClassName('filter__placeholder')[0].addEventListener('click', (e) => {
        if (window.innerWidth > 1024) {
            return;
        }
        document.getElementById('filters-modal').classList.add('visible');
        window.removeEventListener('scroll', placeFilters);
        window.addEventListener('scroll', preventScrolling);
        staticScrollY = window.scrollY;
    });

    document.getElementsByClassName('filters-modal__close')[0].firstElementChild.addEventListener('click', (e) => {
        document.getElementById('filters-modal').classList.remove('visible');
        window.addEventListener('scroll', placeFilters);
        window.removeEventListener('scroll', preventScrolling);
    });

    function preventScrolling() {
        window.scrollTo(0, staticScrollY);
    }
})();