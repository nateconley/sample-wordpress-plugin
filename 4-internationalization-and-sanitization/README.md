# 4: Internationalization and Sanitization
Our client would like to be able to use this on their Spanish language site down the road, so let's make that easy to do!

We added a couple of lines to our header, a blank language folder, and made our strings translatable.

Whenever it can be avoided, we should avoid including html in a translation string. However, in this case, it is unavoidable. We are using ```wp_kses``` and only allowing ```<b></b>```, as translations are not considered trusted.

### Links

- [i18n for WordPress Developers](https://codex.wordpress.org/I18n_for_WordPress_Developers)

- [wp_kses()](https://codex.wordpress.org/Function_Reference/wp_kses)