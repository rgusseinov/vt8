<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddNewFieldToVtigerAccount extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // Check if the 'vtiger_account' table exists
        if ($this->hasTable('vtiger_account')) {
            $table = $this->table('vtiger_account');

            // Check if the 'new_field' column already exists
            if (!$table->hasColumn('zzz_new_field')) {
                $table->addColumn('zzz_new_field', 'string', ['limit' => 50, 'null' => false])
                    ->update();
            }
        } else {
            // Optional: Handle the case where the table doesn't exist
            // This could throw an exception, log an error, etc.
            throw new Exception('Table vtiger_account does not exist.');
        }
    }
}
