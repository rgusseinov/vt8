<?php

use Phinx\Migration\AbstractMigration;

class RemoveNewFieldFromVtigerAccount extends AbstractMigration
{
    public function change()
    {
        // Check if the 'vtiger_account' table exists
        if ($this->hasTable('vtiger_account')) {
            $table = $this->table('vtiger_account');

            // Check if the 'new_field' column exists
            if ($table->hasColumn('zzz_new_field')) {
                $table->removeColumn('zzz_new_field')
                    ->update();
            }
        } else {
            // Optional: Handle the case where the table doesn't exist
            throw new Exception('Table vtiger_account does not exist.');
        }
    }
}
