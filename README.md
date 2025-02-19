# About This Project
This project is built with Laravel, Livewire, TailwindCSS, and AlpineJS (used only for the dropdown).
Livewire comes with AlpineJS already integrated, so we used it without any additional installation.

### Content, Pages & Components
* There is only one page, "Home" for Livewire, along with its Home.php file. Check the web.php file for routes.
* The default layout for Livewire is called livewire.blade.php.
* To keep the code clean, tabs and table items have their own components: "tab-button" and "table-item".

### Icons
* All icons displayed on the website come from https://icones.js.org/
* We used icons via their direct links, meaning an internet connection is required for them to work.
* All icons have their colors defined in the URL. Change ?color=%23000000 to modify the color.
* In ?color=%23000000, replace 000000 with the desired HEX color code while keeping the rest of the URL unchanged.
* To remove the color, simply remove ?color=%23000000, but the icon will then appear completely black.
* We selected all icons to match the design as closely as possible.
* The only image used is the feedback icon (at the top right), which is saved in /public/assets.

### Styling (CSS)
* All custom classes (e.g. colors) are defined in tailwind.config.js.
* Table styling is handled in the /resources/css/app.css file.
* We used arbitrary Tailwind values, such as custom values within classes for pedding, margins e.t.c.
* The [x-cloak] selector in app.css is used by AlpineJS to hide the dropdown on initial page load.

### Font
* We used two fonts, "Inter" and "Inconsolata," which we imported into /resources/css/app.css.
* These fonts are imported from Google Fonts using a CDN (Content Delivery Network).
* The "Inter" font is applied to all elements on the page except the "Invoice Number" column.
* The "Inconsolata" font is used exclusively for the "Invoice Number" column.

### Functionality
* All tabs are clickable and filter invoices based on their "status."
* Tabs visually indicate the active selection using color and a bottom border.
* The refund or spin icon appears only for invoices with the "Paid" status.
* All data displayed in the table is hardcoded in the Home.php file.
* For the dropdown, hovering over the three dots also reveals the download icon, as shown in the design.
* Clicking the three dots opens the dropdown, and clicking elsewhere closes it (handled with AlpineJS).
* The dropdown includes a small notch, matching the design.
* The top search bar functions but only searches by Invoice Number.

### Responsive
* The design is not responsive; otherwise, we would have to remove columns to fit it in the mobile view.
* The original Stripe design is not responsive either—they simply display a horizontal scrollbar at the bottom for scrolling.
* We have implemented a horizontal scrollbar that appears after a certain width (mobile view).
* This responsive feature applies only to the table.
