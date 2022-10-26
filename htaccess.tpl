
# leite den zugriff auf /movies-start in htdocs verzeichnis weiter zu http://movies-start.loc
RedirectPermanent /movies-start http://movies-start.loc

# erlaube ajax zugriff von allen servern 
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>

# routen umschreibungen zu GET parametern
RewriteEngine On
RewriteRule  ^login$ index.php?controller=user&action=login
RewriteRule  ^login/check$ index.php?controller=user&action=check
RewriteRule  ^logout$ index.php?controller=user&action=logout

RewriteRule  ^(authors|movies)/(edit|store|delete)/?([0-9]*)$ index.php?controller=$1&action=$2&id=$3
#example	 /authors/edit/1  wird umgewandelt (rewrited) zu: index.php?controller=authors&action=edit&id=1
RewriteRule  ^(authors|movies)/([0-9]+)$ index.php?controller=$1&action=show&id=$2
#example	 /authors/1  wird umgewandelt (rewrited) zu: index.php?controller=authors&action=show&id=1
RewriteRule  ^(authors|movies)$ index.php?controller=$1&action=index
#example	 /authors  wird umgewandelt (rewrited) zu: index.php?controller=authors&action=index

RewriteRule  ^api/authors$ index.php?controller=api&action=authors
RewriteRule  ^api/author/([0-9]+)$ index.php?controller=api&action=author&id=$1

# css, js, uploads verzeichnisse von umschreibungen ausnehmen
RewriteCond $1 !^(css|js|uploads)/ [NC]
RewriteRule  ^(.*)$ index.php
