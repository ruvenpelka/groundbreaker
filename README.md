**[Child Theme](https://github.com/ruvenpelka/groundbreaker-child-theme)
|
[Theme Docs](#groundbreaker-documentation)
|
[Child Theme Docs](#groundbreaker-child-theme-documentation)
|
[Child Theme Developer Docs](#groundbreaker-child-theme-developer-documentation)**

# Groundbreaker Theme Documentation

The Groundbreaker theme is a speed optimized, lightweight, and mobile friendly theme with block editor support and Tailwind CSS integration.

---

## Quick Setup

1. Install theme
2. Go to **Pages > Add New** and create a page named "Home"
3. Back in the admin panel, go to **Settings > Reading**, set the field **Your homepage displays** to **A static page**, and select the page you've just created under **Homepage**, then hit **Save Changes**
4. Optional: Go to **Settings > Permalink** and activate the **Post name** option under **Common Settings**, then hit **Save Changes**
5. Go to **Appearance > Customize > Site Identity**, set a logo, hit **Publish**, and exit the Customizer
6. Go to **Appearance > Widgets** to add widgets to the **Header**, **Topbar**, **Navbar**, or **Slideover** widget areas
7. Go to **Appearance > Menus**, create a menu, assign it to **Primary Menu** under **Menu Settings**, and hit **Save Menu**
8. Go to **Pages** and edit your home page
9. Click on blue **Toggle block inserter** (+) button on the top left, select the **Patterns** tab, select **Uncategorized** from the select field, and click the image of the block pattern below
10. Hit the blue **Update** on the top right when you're done editing your home page

---

## Theme Components

The theme comes with a few components that can be populated with content through the Widget section (**Appearance > Widgets**). Each component has a designated widget area. The layout of these components can be adjusted via Customizer (**Appearance > Customize > Components**). Some components have two widget areas; one for desktop (e.g. **Header**) and one for mobile (e.g. **Mobile: Header**). The widgets or blocks you add to the desktop widget area will disappear on mobile viewport size and vice versa. This gives you more control over what components appear for different screen sizes.

For example: to set up the Header of the site, go to **Appearance > Widgets**. Here you open the **Header** widget area and start adding widgets or blocks. Each widget or block you add to this area will be displayed horizontally to one another. If you want see a logo on the left and a button on the right of your header, you would first add the "ET: Logo" widget and afterwards the "Buttons" block. If you want to see multiple blocks or widgets on one side, you can also group them by utilizing the "Group" block. This way you could add a logo on the left and then a combination of buttons, social icons, or anything else, on the right. You can customize the look and even the column layout of the Header Component in the customizer, under **Appearance > Customize > Components > Header**.

### Theme Widgets Areas

Under **Appearance > Widgets**, all widget areas with the prefix "ET" are being directly utilized by the theme. The layout of these widget areas can be adjusted under **Appearance > Customize > Components**. Please make sure you adjust the column layout in the customizer according to the amount of widgets, blocks, or groups you add to a widget area.

- **ET: Header**: The main header. Here you can add for example the ET: Logo Widget, a phone button, menus, etc. This area disappears on the mobile viewport size and is replaced by the **ET: Mobile Header** widget area section.
- **ET: Mobile Header**: The main header on the mobile viewport size. This area disappears on the desktop viewport size and is replaced by the **ET: Header** widget area section.
- **ET: Topbar**: The Topbar is located above the header. Here you can add for example contact info, location info, sub-menus etc. This area disappears on the mobile viewport size and is replaced by the **ET: Mobile Topbar** widget area section.
- **ET: Mobile Topbar**: The Topbar on the mobile viewport size. This area disappears on the desktop viewport size and is replaced by the **ET: Topbar** widget area section.
- **ET: Navbar**: The Navbar is located below the header. Here you can add for example the ET: Primary Navigation Widget, social icons, etc. This area disappears on the mobile viewport size and is replaced by the **ET: Mobile Navbar** widget area section.
- **ET: Mobile Navbar**: The Navbar on the mobile viewport size. This area disappears on the desktop viewport size and is replaced by the **ET: Navbar** widget area section.

### Theme Widgets

The theme comes with a few widgets that will make it easier for you to customize your site. These widgets all start with the prefix "ET".

- **ET Logo**: A widget that displays the logo of the site, which can be set under **Appearance > Customize > Site Identity**. This component can be customized under **Appearance > Customize > Components > Logo**.
- **ET Primary Navigation**: A widget that displays the primary navigation, which can be setup under **Appearance > Menus**. Second and third level menus are also supported. This component can be customized under **Appearance > Customize > Components > Navigation**.
- **ET Hamburger Menu**: A widget that displays a Hamburger icon that triggers the ET Slideover widget area section when clicked.
- **ET Stacked Navigation**: A widget that displays the primary menu as stacked navigation. Second and third level menus are also supported. This widget should be used in the Slideover widget area, to give visitors on mobile phones a better experience when browsing through your navigation.

---

## Shortcodes

The theme comes with a few shortcodes, that are described here:

#### `[et_year]` Shortcode
Displays the current year. This comes in handy in the Footer Bar, if you need to write legal text that needs to always display the current year, without wanting to update it manually. 
For example: instead of writing `Copyright ACME Inc. 2022` you would write `Copyright ACME Inc. [et_year]`.

#### `[et_site_title]` Shortcode
Displays the Site Title, which can be set under **Settings > General**.
For example: instead of writing `Copyright ACME Inc. 2022` you would write `Copyright [et_site_title] [et_year]`.

---

## Customizer

The theme makes heavy use of the Customizer (**Appearance > Customize**), which lets you adjust things like colors, typography, spacing, etc. for the themes elements, components, and blocks. Almost all values set via Customizer controls are stored in CSS variables. Some of them (e.g. colors, font size, etc.) are daisy-chained to Tailwind CSS classes, block editor controls, or both.  

The theme's Customizer sections are:

- **Layout**: to adjust the overall layout of the site, like, max. width, background color, block spacing, etc.
- **Fonts**: to embed fonts and set font families.
- **Elements**: settings for elements like the body text, headings, and links.
- **Components**: to style the theme's components, like the header, navbar, sidebar, footer, etc.
- **Blocks**: to style or adjust specific blocks, like the Column, Separator, and Buttons block.
- **UI Settings**: to adjust the settings like color, font size, etc. that are used throughout the customizer and also in the block editor.
- **Theme Settings**: misc. settings

---

## Tailwind CSS Integration

The theme utilizes the [Tailwind CSS framework](https://tailwindcss.com/) to make it easy to create unique and bespoke layouts. Many Tailwind CSS classes are daisy-chained to CSS variables, that are set via Customizer.

For example: the `text-lg` CSS class gets its value from the `--wp--custom--font-size--lg` CSS variable, which in turn gets its value from a customizer control (**Appearance > Customize > UI Settings > Font Size Settings > Large**). Even the font size block editor controls are utilizing the same CSS variables. This way everything is always in sync and has one source of truth.

### CSS Classes

Since the amount of all Tailwind CSS classes is too enormous to be integrated into the theme out-of-the-box and would blow up the size of CSS files, we created a Whitelist of all Tailwind CSS that can be used with the theme. If you want to utilize any other Tailwind CSS classes, please read the [Groundbreaker Developer Documentation](#groundbreaker-developer-documentation).

The whitelisted CSS classes can be used directly in the block editor. When editing a block (e.g. Group block), open the **Advanced** panel and add the class(es) to the **Additional CSS class(es)** field.

The whitelisted CSS classes can also be used in any theme file of a child theme.

### Additional CSS Classes

The theme adds some custom Tailwind CSS classes, which are described here:

#### Custom Spacing Classes

The theme adds `block` and `block-lg` spacing classes to the Tailwind CSS framework. The **block** space is by default applied between all blocks. The **block-lg** space is applied as padding to Group blocks with a background color, and blocks with the helper class `s-section`. This space is also used as left/right padding for all containers. 

Here are just a few examples of these classes, that can be used throughout the theme:
- `p-block`, `px-block`, `pt-block`, `m-block`, `my-block`, `mb-block`
- `p-block-lg`, `px-block-lg`, `pt-block-lg`, `m-block-lg`, `my-block-lg`, `mb-block-lg`

#### Custom Color Classes
The theme adds `primary` and `secondary` color classes to the Tailwind CSS framework. The colors for these classes can be set via Customizer under **UI Settings > Colors** and are stored in CSS variables (e.g. `--wp--custom--color--primary-500`). 

Here are just a few examples of these classes, that can be used throughout the theme:
- `text-primary-500`, `bg-primary-200`, `border-primary-400`
- `text-secondary-500`, `bg-secondary-200`, `border-secondary-400`

#### `font-primary` Class
The font set via Customizer under **UI Settings > Fonts > Fonts > Font Family** and stored in the CSS variable `--wp--custom--site--font-family`.

#### `font-secondary` Class
The font set via Customizer under **UI Settings > Fonts > Fonts > Secondary Font Family** and stored in the CSS variable `--wp--custom--site--font-family--secondary`.

#### `text-base-color` Class
Applies the text color that can be set under **Appearance > Customize > Elements > Body Text > Text Color**, through the `--wp--custom--site--text-color` CSS varibale.

#### `border-3` Class
Applies a 3px border.

#### `bg-overlay` Class
Applies a half-transparent dark background color, that can be set through the `--wp--custom--color--overlay` CSS varibale. This background color can be used when Slideover menus or modal windows are displayed to mute the rest of site.

### Tailwind Plugins

The Tailwind CSS integration of the theme utilizes the following plugins:
- [@tailwindcss/typography](https://tailwindcss.com/docs/typography-plugin)
- [@tailwindcss/forms](https://github.com/tailwindlabs/tailwindcss-forms)
- [@tailwindcss/forms](https://github.com/tailwindlabs/tailwindcss-forms)

---

## CSS Helper Classes

The theme comes with some CSS classes that can help you achieve quick results. When editing a block, you can add these classes by opening the **Advanced** panel and adding them to the **Additional CSS class(es)** field.

#### `s-section` Helper Class
This class adds a large block padding (adjustable via Customizer) to the block it is applied to. It also removes vertical margins.

Blocks this class can be applied to:
- Group

#### `s-no-gap` Helper Class
This class removes and default spacing of child elements. When applied to a Group block, all blocks within lose their default margin. When applied to a Columns or Gallery block, the column gaps disappear. This comes in handy when you need to fine-tune the spaces of blocks anyway (e.g. via Tailwind CSS classes) and don't want to negate a lot of spaces by hand.  

Blocks this class can be applied to:
- Group
- Columns
- Gallery

#### `s-top-bottom` Helper Class
Apply this class to a group that sits inside a Column block. Make sure the Column block only has two child blocks (which can also be Group blocks). The first child block will be kept at the top of the column, the last on the bottom. This comes in handy when creating card components, where a button has to be always at the bottom, while the text area for all columns might be of different height. 

Blocks this class can be applied to:
- Group
- Column

#### `o-container` Class
This is not really a helper class, but it might be worth a mention anyway. Applying this class to an element will set a max. width, responsive paddings, and center it. The behavior of this class (and all other containers) can be adjusted via Customizer.

---

## Theme Structure

```
assets
└───css
│   └───dist
│   └───src
│       └───global
│       └───tailwind
│
└───inc
│   └───admin 
│   │   └───customizer
│   └───widgets
│
└───languages
└───template-parts
│   └───content
│   └───footer
│   └───header
```

- `assets/css/src`: CSS source files that will be compiled into the `dist` folder.
- `assets/css/dist`: Compiled CSS files.
- `inc`: Theme functions.
- `inc/admin`: Theme functions that apply to the admin panel.
- `inc/widgets`: Widgets.
- `languages`: Language files.
- `template-parts`: Template components that are included template files.
- `template-parts/content`: Template components that are included in template files that output the content of a page.
- `template-parts/footer`: Template components that are included in template files that output the footer of the site.
- `template-parts/header`: Template components that are included in template files that output the header of the site.



---



# Groundbreaker Child Theme Documentation

---

## How to Set Up a Child Theme

1. Move the `groundbreaker-child` folder into the `wp-content/themes` directory.
2. Rename the `groundbreaker-child` folder to your desired theme name.
3. In the child theme root folder, open `style.css` and change the theme's information (e.g. Name, Description, etc.).
4. In `package.json`, replace all instances of `groundbreaker-child` with your theme name handle.

---

## Child Theme Tips & Tricks

1. Make sure you're familiar with [child theme development](https://developer.wordpress.org/themes/advanced-topics/child-themes/).
2. Make sure you're familiar with the Groundbreaker Theme. The child theme works in the same way.
3. **Do not ever edit the parent theme.** Updating it would override your changes. Only add and modify things in the child theme.
4. If you add Tailwind classes to a block in the block editor through the **Additional CSS class(es)** field, make sure to add them to `tailwind.safelist.txt`, if they're not already in the safelist of the parent theme.
5. Make sure you familiarize yourself with the custom Tailwind CSS classes that the parent theme introduces. Helper classes like `s-section` and `o-container` for example are important to create consitent looking layouts.
6. One of the first things you should always do is setting up the fonts and color palette in the customizer.
7. To add CSS to the child theme, add it to `assets/css/src/child-global.css`
8. **Never** add any CSS directly to the files in the `assets/css/dist` folder. If you use the NPM scripts to compile the CSS from the `assets/css/src` folder, the files in these folders will be overwritten. If you don't use NPM scripts to compile your CSS you can add code directly to the `style.css`.



---



# Groundbreaker Child Theme Developer Documentation

The Groundbreaker Theme starter child theme allows you to change or override most aspects of the parent theme. With the NPM scripts you even get _full_ Tailwind CSS integration to create completely custom layouts for your site.

---

## System Setup

- Install [NodeJS](http://nodejs.org)
- Node version during time of development: 15.0

---

## Installation

`npm install`

---

## NPM Scripts

- `npm run build` compiles CSS asset files, outputs them to the `./assets/css/dist`folder.
  
- `npm run watch` runs dev script and starts file watcher.

- `npm run bundle` creates a ZIP file of the theme in the project's root folder. It excludes folders like `.git`, `node_modules`, but leaves `src` folders and config files included.

### CSS

#### Files

In the folder `./assets/css/src` you will find the source CSS files

## Theming

This child theme comes with full Tailwind CSS support. You can configure TailwindCSS in `tailwind.config.js`, which pulls in a config preset from the parent theme. Values set by the preset can be overwritten and you can add more config as well. 

To create a child theme, copy and paste the parent theme's templates or template parts into the child theme and then modify the code.

CSS can be added or modified in `./assets/src/child-global.css`. Here you can also override CSS variables.

To write CSS for the block editor specifically, use `./assets/src/child-block-editor.css`.