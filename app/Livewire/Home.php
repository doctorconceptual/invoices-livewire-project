<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;

class Home extends Component
{
    public $tab = "all", $search = "";
    public $invoices = [], $invoicesPlaceHolder = [];

    public function mount()
    {
        $this->invoices = [
            [
                "amount" => 245.50,
                "currency" => 'USD',
                "status" => 'draft',
                "invoice" => "7AC39521-0001",
                "customer" => 'john.doe@gmail.com',
                "due" => "",
                "created_at" => "April 15, 3:22PM"
            ],
            [
                "amount" => 1299.99,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "9XB48732-0002",
                "customer" => 'sarah.smith@outlook.com',
                "due" => "",
                "created_at" => "April 16, 9:45AM"
            ],
            [
                "amount" => 75.25,
                "currency" => 'USD',
                "status" => 'outstanding',
                "invoice" => "5KD92147-0003",
                "customer" => 'robert.johnson@yahoo.com',
                "due" => "",
                "created_at" => "April 17, 2:15PM"
            ],
            [
                "amount" => 499.99,
                "currency" => 'USD',
                "status" => 'due',
                "invoice" => "3MN67459-0004",
                "customer" => 'emma.wilson@hotmail.com',
                "due" => "",
                "created_at" => "April 18, 11:30AM"
            ],
            [
                "amount" => 150.00,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "2PQ84321-0005",
                "customer" => 'david.brown@gmail.com',
                "due" => "",
                "created_at" => "April 19, 4:50PM"
            ],
            [
                "amount" => 899.50,
                "currency" => 'USD',
                "status" => 'outstanding',
                "invoice" => "8WE52963-0006",
                "customer" => 'lisa.taylor@yahoo.com',
                "due" => "",
                "created_at" => "April 20, 1:20PM"
            ],
            [
                "amount" => 45.75,
                "currency" => 'USD',
                "status" => 'draft',
                "invoice" => "4HJ71835-0007",
                "customer" => 'michael.clark@outlook.com',
                "due" => "",
                "created_at" => "April 21, 10:05AM"
            ],
            [
                "amount" => 299.99,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "6YU93647-0008",
                "customer" => 'anna.miller@gmail.com',
                "due" => "",
                "created_at" => "April 22, 5:35PM"
            ],
            [
                "amount" => 750.00,
                "currency" => 'USD',
                "status" => 'due',
                "invoice" => "1RS28594-0009",
                "customer" => 'peter.davis@hotmail.com',
                "due" => "",
                "created_at" => "April 23, 8:45AM"
            ],
            [
                "amount" => 125.50,
                "currency" => 'USD',
                "status" => 'outstanding',
                "invoice" => "9TG46182-0010",
                "customer" => 'rachel.white@yahoo.com',
                "due" => "",
                "created_at" => "April 24, 3:15PM"
            ],
            [
                "amount" => 1500.00,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "5VN73915-0011",
                "customer" => 'james.wilson@gmail.com',
                "due" => "",
                "created_at" => "April 25, 12:25PM"
            ],
            [
                "amount" => 89.99,
                "currency" => 'USD',
                "status" => 'draft',
                "invoice" => "7BM51843-0012",
                "customer" => 'olivia.jones@outlook.com',
                "due" => "",
                "created_at" => "April 26, 9:55AM"
            ],
            [
                "amount" => 450.25,
                "currency" => 'USD',
                "status" => 'due',
                "invoice" => "2CQ64728-0013",
                "customer" => 'william.harris@yahoo.com',
                "due" => "",
                "created_at" => "April 27, 2:40PM"
            ],
            [
                "amount" => 275.00,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "8XP39157-0014",
                "customer" => 'sophia.martin@gmail.com',
                "due" => "",
                "created_at" => "April 28, 7:10AM"
            ],
            [
                "amount" => 950.75,
                "currency" => 'USD',
                "status" => 'outstanding',
                "invoice" => "4KL82634-0015",
                "customer" => 'daniel.thompson@hotmail.com',
                "due" => "",
                "created_at" => "April 29, 4:30PM"
            ],
            [
                "amount" => 199.99,
                "currency" => 'USD',
                "status" => 'draft',
                "invoice" => "6ZH95471-0016",
                "customer" => 'emily.anderson@yahoo.com',
                "due" => "",
                "created_at" => "April 30, 11:50AM"
            ],
            [
                "amount" => 825.50,
                "currency" => 'USD',
                "status" => 'paid',
                "invoice" => "3WF61928-0017",
                "customer" => 'thomas.baker@outlook.com',
                "due" => "",
                "created_at" => "May 1, 6:20PM"
            ],
            [
                "amount" => 65.25,
                "currency" => 'USD',
                "status" => 'due',
                "invoice" => "9QL27385-0018",
                "customer" => 'jessica.cooper@gmail.com',
                "due" => "",
                "created_at" => "May 2, 1:40PM"
            ],
            [
                "amount" => 550.00,
                "currency" => 'USD',
                "status" => 'outstanding',
                "invoice" => "1YM48596-0019",
                "customer" => 'andrew.phillips@yahoo.com',
                "due" => "",
                "created_at" => "May 3, 8:05AM"
            ],
        ];
        $this->invoicesPlaceHolder = $this->invoices;
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function updatedtab()
    {
        $tabValue = $this->tab;
        if ($tabValue == 'all') {
            $this->invoices = $this->invoicesPlaceHolder;
        } else {
            $this->invoices = array_filter($this->invoicesPlaceHolder, function ($item) use ($tabValue) {
                return $item['status'] == $tabValue;
            });
        }
    }

    public function updatedSearch()
    {
        if ($this->search == '') {
            $this->invoices = $this->invoicesPlaceHolder;
        } else {
            $searchTerm = strtolower($this->search);
            $this->invoices = array_filter($this->invoicesPlaceHolder, function ($item) use ($searchTerm) {
                return str_contains(strtolower($item['invoice']), $searchTerm);
            });
        }
        if ($this->tab !== 'all') {
            $tabValue = $this->tab;
            $this->invoices = array_filter($this->invoices, function ($item) use ($tabValue) {
                return $item['status'] == $tabValue;
            });
        }
    }
}
