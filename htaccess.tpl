
RedirectPermanent /movies-start http://movies-start.loc

<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>

RewriteEngine On
RewriteRule  ^login$ index.php?controller=user&action=login
RewriteRule  ^login/check$ index.php?controller=user&action=check
RewriteRule  ^logout$ index.php?controller=user&action=logout

RewriteRule  ^(authors|movies|events|categories)/(edit|store|delete)/([0-9]+)$ index.php?controller=$1&action=$2&id=$3
RewriteRule  ^(authors|movies|events|categories)/([0-9]+)$ index.php?controller=$1&action=show&id=$2
RewriteRule  ^(authors|movies|events|categories)$ index.php?controller=$1&action=index

RewriteRule  ^api/authors$ index.php?controller=api&action=authors
RewriteRule  ^api/author/([0-9]+)$ index.php?controller=api&action=author&id=$1

RewriteCond $1 !^(css|js|uploads)/ [NC]
RewriteRule  ^(.*)$ index.php
