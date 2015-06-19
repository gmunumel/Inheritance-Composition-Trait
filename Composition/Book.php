<?php
/**
 * Created by PhpStorm.
 * User: gabrielmunumel
 * Date: 6/19/15
 * Time: 11:22 AM
 */

namespace Composition;

class Book {
    // some methods

    protected $persistence;

    public function setPersistence(PersistenceService $persistence) {
        $this->persistence = $persistence;
    }

    public function persist() {
        $this->persistence->persist($this, get_class($this));
    }

    public function restore($id) {
        return $this->persistence->restore($id, get_class($this));
    }
}