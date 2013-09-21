wp-custom-dashboard
===================

WP Custom Dashboard is a plugin boilerplate for creating a custom dashboard page in WordPress


## Features
1. Custom dashboard page appears when you first enter wp-admin or dashboard->home page
2. Dashboard home page has no menu subpage tab
3. Easily customizable HTML, JS and CSS of the dashboard


## How It Works

WP Custom Dashboard works by redirecting the user to a specifc page, in particular: /wp-admin/index.php?page={slug-name}, when they try to visit wp-admin/index.php.


## Installation

1. Download wp-custom-dashboard as a zip file
2. Unzip and upload wp-custom-dashboard directory into your wp-content/plugins directory
3. Navigate to the Plugins dashboard page
4. Locate the menu item that reads `WP Custom Dashboard`
5. Click on `Activate`


## Customizing Plugin

At the moment, this plugin is a boilerplate. To edit the boilerplate, you need to edit the followings files:

1. `dashboard/dashboard.php` :  HTML/PHP file that contains the markup of your dashboard page
2. `dashboard/js/script.js`  :  JavaScript that will be loaded ONLY on the custom dashboard page
3. `dashboard/css/style.css` :  CSS that will be loaded ONLY on the custom dashboard page
4. `dashboard/img`           :  Images that can be loaded into the dashboard page. You can prepend 'IMAGE_URL' to get the URL of the image file directory


## License
(The MIT License)

Copyright (c) 2013 Buooy

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
