<?php
interface Compare_Interface
{
    static function getConfigOptions($part=null);
    /**
     * Compare content of local and remote storages
     *
     * @abstract
     * @param  $myrole
     * @param  $drivers
     * @return void
     */
    function compare($myrole, $drivers);
    /**
     * Initialize iterator of tasks to be executed on storage
     *
     * @param int $storageType type of storage (Core_Engine::ROLE_REMOTE or Core_Engine::ROLE_LOCAL)
     * @return bool
     */
    function initChangesOn($storageType);

    function wasAlreadyUpdatedFrom($role);
}