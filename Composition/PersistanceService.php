<?php
/**
 * Created by PhpStorm.
 * User: gabrielmunumel
 * Date: 6/19/15
 * Time: 11:21 AM
 */

namespace Composition;

class PersistenceService {

    public function persist($object, $class) {

        apc_store($class . $object->id, serialize($object));
    }

    public function restore($id, $class) {

        return unserialize(apc_fetch($class . $id));
    }
}