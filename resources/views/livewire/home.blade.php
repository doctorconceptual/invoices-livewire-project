<section class="w-full h-full">
    <div class="w-full max-w-center-container p-4 m-auto flex flex-col">
        {{-- Search Bar with Items --}}
        <div class="flex items-center justify-between mb-12 border-b border-gray-300 pb-2 font-semibold">
            <div class="flex items-center w-full max-w-[400px]">
                <label for="search">
                    <img src="https://api.iconify.design/hugeicons:search-01.svg?color=%238c919c" width="18">
                </label>
                <input type="text" autocomplete="off" id="search" wire:model.live="search"
                    class="py-2 px-3 outline-none w-full font-semibold" placeholder="Search...">
            </div>
            <div class="flex items-center">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('assets/feedbackicon.png') }}" width="19">
                    <span class="ml-2 text-gray-500 text-sm">Feedback?</span>
                </a>
                <a href="#" class="flex items-center ml-6 relative">
                    <img src="https://api.iconify.design/ic:sharp-notifications.svg?color=%238c919c" width="20px">
                    <span
                        class="bg-red-600 absolute border-[2px] border-white rounded-full py-[2px] px-[6px] text-[8px] text-white -top-2 -right-2">1</span>
                </a>
                <a href="#" class="flex items-center ml-6 relative">
                    <img src="https://api.iconify.design/iconamoon:question-mark-circle-fill.svg?color=%238c919c"
                        width="20px">
                </a>
                <a href="#" class="flex items-center ml-6 relative">
                    <img src="https://api.iconify.design/mingcute:user-2-fill.svg?color=%238c919c" width="20px">
                </a>
            </div>
        </div>

        {{-- Invoice Header --}}
        <div class="flex items-center justify-between">
            <h1 class="text-4xl font-bold">Invoices</h1>
            <div class="flex items-center">
                <button class="flex items-center rounded-md border border-gray-300 p-[5px] px-2 shadow-sm">
                    <img src="https://api.iconify.design/material-symbols-light:filter-alt-sharp.svg?color=%23535869"
                        width="21">
                    <span class="text-sm text-text-gray font-semibold ml-[4px] py-[1px]">Filter</span>
                </button>

                <button class="flex items-center rounded-md border border-gray-300 p-[5px] px-3 ml-2 shadow-sm">
                    <img src="https://api.iconify.design/mdi:arrow-top-right.svg?color=%23535869" width="21">
                    <span class="text-sm text-text-gray font-semibold ml-[4px] py-[1px]">Export</span>
                </button>

                <button class="flex items-center bg-main rounded-md border border-main p-[5px] px-2 ml-2">
                    <img src="https://api.iconify.design/material-symbols:add.svg?color=%23ffffff" width="21">
                    <span class="text-sm text-white font-semibold ml-[4px]">Create Invoice</span>
                    <span
                        class="bg-main-light text-white font-semibold text-sm py-[1px] px-[6px] rounded-md ml-2">N</span>
                </button>
            </div>
        </div>

        {{-- Invoice Tabs, Clickable Buttons --}}
        <div class="flex mt-4">
            <x-tab-button tab="all" text="All Invoices" selected="{{ $tab }}" class="min-w-[90px]" />
            <x-tab-button tab="draft" text="Draft" selected="{{ $tab }}" class="min-w-[90px]" />
            <x-tab-button tab="outstanding" text="Outstanding" selected="{{ $tab }}" class="min-w-[140px]" />
            <x-tab-button tab="due" text="Past Due" selected="{{ $tab }}" class="min-w-[120px]" />
            <x-tab-button tab="paid" text="Paid" selected="{{ $tab }}" class="min-w-[90px]" />
            <div class="border-b border-gray-300 text-light-gray-dark w-full"></div>
        </div>

        {{-- Invocie Table --}}
        <div class="overflow-x-auto">
            @if (count($invoices))
                <table class="w-full table-fixed mt-7">
                    <tr class="uppercase font-medium text-[13px]">
                        <td width="250px" class="pl-3">Amount</td>
                        <td width="140px">Invoice Number</td>
                        <td class="880px:w-[270px]">
                            <div class="flex items-center">
                                <span>Customer</span> <img
                                    src="https://api.iconify.design/solar:settings-bold.svg?color=%239ca3af"
                                    class="ml-1">
                            </div>
                        </td>
                        <td width="60px">Due</td>
                        <td width="180px">Created</td>
                    </tr>
                    @foreach ($invoices as $invoice)
                        <x-table-item :invoice="$invoice" />
                    @endforeach
                </table>
            @else
                <p class="py-3 text-center text-light-gray-dark">Invoice not found!</p>
            @endif
        </div>
    </div>
</section>
