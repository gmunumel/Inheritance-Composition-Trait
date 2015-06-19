<?php
/**
 *
 * Created by PhpStorm.
 * User: gabrielmunumel
 * Date: 6/19/15
 * Time: 11:35 AM
 */

namespace Traits;

trait Persistable {

    public function persist()
    {
        apc_store(get_class($this) . $this->id, serialize($this));
    }

    public function restore($id)
    {
        return unserialize(apc_fetch(get_class($this) . $id));
    }
}