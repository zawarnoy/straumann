<?php

namespace App;


class Post extends \TCG\Voyager\Models\Post
{
    public function save(array $options = [])
    {
        if (empty($options['status'])) {
            $this->status = self::PUBLISHED;
        }

        parent::save();
    }
}