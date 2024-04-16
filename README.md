# Allow Autoupdate 

When Wordpress is stored in a directory which is under version control, updates no longer install automatically.

This makes sense from the standpoint of not unexpectedly overwriting your code, but if you have a use case where you want to allow the updates, you need to take extra steps.

That's where this (one-line) plugin comes into play. Just copy it into either `wp-content/plugins` or `wp-content/mu-plugins`.
(In the case of mu-plugins, copy only `allow-autoupdate.php` to the directory.)
