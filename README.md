# FIA Sustainability development notes

TODO: Notes, recommendations and requests for code standards

We are sharing some notes upon reviewing some of the output code on the FIA Sustainability project. These must be observer for new / future deliveries, or edits made to this version of the website

1. **Make sure indenting is always 2 spaces (not 4)**. When working on a file with 4 spaces simply use the search and replace the 4 spaces by 2 please. Use 2 spaces for the identation of php, scss, css, js, etc all files please, this improves readability of the code for long term maintenance

1. Do NOT or avoid using class names for visual things such as colours / big / small.

1. **Do NOT use important! for your own code / code from axon/viralbamboo** (only exception is for plugins - but we should still try and override by using specificity - please check specificity if in doubt)

1. **Only use colours from the colors.scss. Include new colours depending on the theme design.** Specifically with this theme please get familiriased with how that works specially the background / foreground colours. We like to use percentages of colours with the second argument of the `color: color('primary', .5)`

1. **All gradient overlays in images MUST come from the code style and not as part of the image file**

1. **We would like to see most of the clickable interactive boxes to be coded using swiper.js for the future and not custom js** Swiper js is very flexible and the behaviour on the 'tabs' section of the homepage could be achieved by using the swiper thumbs feature: https://swiperjs.com/demos#thumbs-gallery (the thumbs gallery could be text, not only pictures)

1. **Do not use a graphic (svg or png, etc) for graphic elements that are numbers, example big numbers in FIA Environmental Strategy**. These should be simple text fields in ACF that are rendered using the font in a large size and with an outline, this is so to allow easily changing that number in the CMS. This should also be used when coding decorative typographic elements (such as " in quotes, etc)

1. **Please use sass as the working code in this theme**. Observe the following aspects below:

  1. We use .scss instead of sass, which means that we use semicolons and open and close curly braces {}

  1. Please write sass .scss by only giving one selector and nesting the other selectors underneath, check examples in the scss files here. Please don't write: `.section-nav .wrapper div ul li a {color: red;}` instead write:

````
.section-nav {
  .wrapper {
    div {
      ul {
        li {
          a {
            color: red;
          }
        }
      }
    }
  }
}
````

  1. Please only ONE declaration per line. Don't write: `.nav-menu {position: absolute; top: 0; bottom: 0; width: 100%; background: color('red')};`. Write instead :

````
.nav-menu {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  background: color('red');
}
````

1. We would like to see most sections / layout elements coded NOT using fixed widths (like `width: 820px;`) but rather heavily using flex and percentages. Please get yourself familiar with flexbox. We would like to see most of the layout elements defined in terms of percentages (such as 50% and 50% = 2 equal columns) or 66.66% and 33.33% (2 thirds and 1 third etc)

This can be done by:

````
<section class="section-content-banner">
  <div class="container>
    <figure class="section-homepage-banner__figure">
    <figcaption class="section-homepage-banner__content">
    <!-- etc -->
````

This could be the .scss for that section

````
.section-homepage-banner {
  .container,
  .wrapper {
    display: flex;
  }
  .section-homepage-banner__content {
    flex: 1 1 66.66%;
  }
  .section-homepage-banner__figure {
    flex: 0 0 33.33%;
  }
}
````

1. We would like to ask you to please use our media.scss breakpoints and the shortcuts as @media($desktop) {
  // from desktop up, etc
}

14. Please get used to using the 'owl' selector and some variations of these. We always like to use:
````
> * {
  + * {
    margin-top: 1em;
  }
}
// Above means: Add 1em margin for all elements of this list, except the first one
````

1. For the future / future projects, please only use the reset / normalising stylesheet as part of our sass files / starter theme

1. We like to use rem for font sizes, and some other things too. We would like to see more of this in the future / future projects, I can record a video to show how we use it

1. For typography / content color we usually set color: inherit; in the typography.scss file or global.scss file
This means that we can then colour most of the text in the sections by specifying a colour in the parent section and not on the specific elements, this saves time.

Example:
````
.section-callToAction {
  color: color('blue'); // only once for whole section
  .wrapper {
    .callToAction-content {
      h1 {
        font-size: 9rem;
        // it is already specified as color: inherit  in typography.scss so it will use blue
      }
      p {
        text-transform: uppercase;
        // it is already specified as color: inherit  in typography.scss so it will use blue
      }
      a {
        span {
          // If we do nothing colour is blue
          // But we can override for some areas that need special colour like below:
          color: color('red);
        }
      }
    }
  }
}
````

1. Please use currentColor in SVGS,
this also works with svg use, then you can recolour your svg like normal css
https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/color
Also check some examples in this code. Search for 'currentColor'

1. Please for the future, learn how to code resposive aspect ratio boxes / rectangles and squares, that grow responsively.
A good test it trying to code a responsive square that grows all side proportionally. The same technique can be used to code responsive rectangles, we would like to see and use more of this in the future for images especially

Some articles:
https://spin.atomicobject.com/2015/07/14/css-responsive-square/

Try and also learn some other common aspect ratios:
Square is 1:1 (which means 100% padding-bottom or top)

16:9 (hd screens / monitors) are good for pictures and video
it is usually 56.25%

Also learn 4:3 (75%)

and the 'portrait' version of those:
3:4 and 9:16 (vertical stories)

you can also use more and customise to the theme, like 21:9, etc

https://css-tricks.com/aspect-ratio-boxes/


1. Please pay attention and only write SCSS rules that match the PHP/html structure

There's several, loads of declarations of a.button (anchor <a href=""> element with .button class applied to it) and there's not a single occurence of this happening in the html/php
This can be seen in the file 'styles-weboccult-backup.scss'.

This becomes very difficult to maintain quickly and effectively in the long run

1. Please don't use V2 to name a different 'appearance/style' of a component.
Example button v2 / section v2

It sounds like in software development when v2 comes to 'replace' v1 as an improvement of v1 - and then v1 is no longer in use, etc (like we do in style.css)

Instead name it according to the role in the code / system. E.g. for buttons, use button button-primary and button button-secondary and so on

1. HTML: Please use more semantic HTML. There are LOTS os divs when other tags could be used 
https://developer.mozilla.org/en-US/docs/Glossary/Semantics#semantics_in_html

This is also important for SEO. See article below:
https://www.semrush.com/blog/semantic-html5-guide/

1. We found in the front-page (please check front-page-weboccult-backup.php file) that the number of opening <div> tags doesn't match the closing </div> tags. This is another reason to write semantic tags, it makes it visually easier to see and close tags, etc

1. for any future PHP: Please avoid using <?php if($condition) {?> with curly braces, and instead use <?php if($condition): ?> with the colon symbol ":" instead. We had errors and problems in the past due to the usage with curly brace