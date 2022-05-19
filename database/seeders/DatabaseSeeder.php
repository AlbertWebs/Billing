<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AccountbalanceTableSeeder::class);
        $this->call(B2bApiResponseTableSeeder::class);
        $this->call(B2cApiResponseTableSeeder::class);
        $this->call(BillingsTableSeeder::class);
        $this->call(CashesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ExpensesTableSeeder::class);
        $this->call(LnmoApiResponseTableSeeder::class);
        $this->call(MobilePaymentsTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(ReverseTransactionTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TransactionStatusTableSeeder::class);
        $this->call(TutorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
