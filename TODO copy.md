TODO: Do NOT use class names for visual things such as colours / big / small etc

TODO: Do NOT use important! for your own code / code from axon/viralbamboo (only exception is for plugins - but we should still try and override by using specificity - please check specificity if in doubt)

TODO: Only use colours from the colors.scss. Include new colours depending on the theme. Specifically with this theme please get familiriased with how that works specially the background / foreground colours

TODO: All gradient overlays in images MUST come from the code style and not as part of the image file

TODO: We would like to see most of the clickable interactive boxes to be coded using swiper.js for the future

TODO: Do not use a graphic (svg or png, etc) for graphic elements that are numbers, example big numbers in FIA Environmental Strategy

TODO: Please use sass as the working code in this theme. Observe the following aspects below:

TODO: We use .scss instead of sass, which means that we use semicolons and open and close curly braces {}

TODO: Use 2 spaces for the identation of php, scss, css, js, etc all files please, this improves readability of the code for long term maintenance

TODO: Please write sass by only giving one selector and nesting the other selectors underneath, check examples in the scss files here. Please don't write: .section-nav.wrapper div ul li a {color: red;} instead write:
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

TODO: Please only ONE declaration per line. Don't write: .nav-menu {position: absolute; top: 0; bottom: 0; width: 100%; background: color('red')}
Write instead :
.nav-menu {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  background: color('red');
}

TODO: We would like to see most sections / layout elements coded NOT using fixed withs but rather heavily using flex and percentages. Please get yourself familiar with flexbox.

TODO: We would like to see most of the layout elements defined in terms of percentages (such as 50% and 50% = 2 equal columns) or 66.66% and 33.33% (2 thirds and 1 third etc)

TODO: We would like to ask you to please use our media.scss breakpoints and the shortcuts as @media($desktop) {
  // from desktop up
}

TODO: Please get used to using the 'owl' selector and some variations of these. We always like to use:
> * {
  + * {
    margin-top: 1em;
  }
}

// Above means: Add 1em margin for all elements of this list, except the first one

TODO: For the future, please only use the reset / normalising stylesheet as part of our sass files / starter theme

TODO: We like to use rem for font sizes. We would like to see more of this in the future / future projects, I can record a video to show how we use it

TODO: For typography / content color we usually set color: inherit; in the typography.scss file or global.scss file
This means that we can then colour most of the text in the sections by specifying a colour in the parent section and not on the specific elements, this saves time:

Example:
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

TODO: Please use currentColor in SVGS,
this also works with svg use, then you can recolour your svg like normal css
https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/color

TODO: Please for the future, learn how to code resposive aspect ratio boxes / rectangles and squares, that grow responsively.
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

https://css-tricks.com/aspect-ratio-boxes/


TODO: Please pay attention and only write SCSS rules that match the PHP/html structure

There's several, loads of declarations of a.button (anchor <a href=""> element with .button class applied to it) and there's not a single occurence of this happening in the html/php
This can be seen in the file 'styles-weboccult-backup.scss'.

This becomes very difficult to maintain quickly and effectively in the long run

TODO: Please don't use V2 to name a different 'appearance/style' of a component.
Example button v2 / section v2

It sounds like in software development when v2 comes to 'replace' v1 as an improvement of v1, etc (like we do in style.css)

Instead name it according to the role in the code / system. E.g. for buttons, use button button-primary and button button-secondary and so on

