@props(['invoice'])
<tr class="text-text-gray text-sm">
    <td>
        <div class="flex items-center">
            <span
                class="font-semibold text-end w-full max-w-[70px] {{ $invoice['status'] == 'paid' ? 'text-black' : '' }}">
                ${{ number_format($invoice['amount'], 2) }}
            </span>
            <span class="uppercase mx-3 text">{{ $invoice['currency'] }}</span>
            <span class="uppercase w-[30px]">
                @if ($invoice['status'] == 'paid')
                    <img src="https://api.iconify.design/gravity-ui:arrows-rotate-right.svg?color=%235d6373">
                @endif
            </span>
            @if ($invoice['status'] == 'paid')
                <span class="py-[3px] text-[13px] px-3 bg-btn-back-green text-btn-green rounded-lg font-bold">Paid</span>
            @elseif($invoice['status'] == 'draft')
                <span
                    class="py-[3px] text-[13px] px-3 bg-light-gray-100 text-light-gray-dark  rounded-lg font-bold">Draft</span>
            @elseif($invoice['status'] == 'outstanding')
                <span class="py-[3px] text-[13px] px-3 bg-blue-500/20 text-blue-600  rounded-lg font-bold">Open</span>
            @elseif($invoice['status'] == 'due')
                <span class="py-[3px] text-[13px] px-3 bg-red-500/20 text-red-600  rounded-lg font-bold">Past
                    Due</span>
            @endif
        </div>
    </td>
    <td class="text-light-gray-dark invoice-price">{{ $invoice['invoice'] }}</td>
    <td class="text-light-gray-dark">{{ $invoice['customer'] }}</td>
    <td>{{ $invoice['due'] != '' ? $invoice['due'] : '—' }} </td>
    <td>
        <div class="flex items-center justify-start relative pr-2" x-data="{ open: false }" @click.away="open = false">
            <span>{{ $invoice['created_at'] }}</span>
            <div class="ml-5 group flex items-center absolute -top-1 right-0 bg-white">
                <div
                    class="hidden cursor-pointer group-hover:block py-1 px-2 border-y border-x hover:border-gray-400 rounded-l-md shadow-sm">
                    <img src="https://api.iconify.design/ri:arrow-down-line.svg?color=%23535869" width="20">
                </div>
                <div @click="open = !open"
                    class="py-1 px-2 group-hover:border-y group-hover:border-x cursor-pointer hover:border-gray-400 rounded-r-md group-hover:shadow-sm">
                    <img src="https://api.iconify.design/mdi:dots-horizontal.svg?color=%235d6373" width="20">
                </div>
                <div x-show="open" x-transition x-cloak
                    class="absolute right-0 top-8 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-xl z-10">
                    <div
                        class="absolute top-[-8px] right-4 w-4 h-4 bg-white border-l border-t border-gray-200 rotate-45">
                    </div>
                    <ul class="py-2 text-gray-700 font-semibold">
                        <li class="px-4 py-1 mb-2 uppercase text-light-gray-50">Actions</li>
                        <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer text-main">Download PDF</li>
                        <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer text-main">Duplicate invoice</li>
                        @if ($invoice['status'] == 'draft')
                            <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer text-txt-red">Delete draft
                            </li>
                        @endif
                        <li class="border-b border-gray-200 my-2"></li>
                        <li class="px-4 py-1 mb-2 uppercase text-light-gray-50">Connections</li>
                        <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer text-main flex items-center">
                            <span class="mr-1">View customer</span> <img
                                src="https://api.iconify.design/material-symbols:arrow-right-alt-rounded.svg?color=%23586dce"
                                width="22">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </td>
</tr>
