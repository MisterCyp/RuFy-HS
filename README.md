# RuFy
Projet PHP qui permet de télécharger directement sur sa seedbox les torrents de YIFY

Le projet utilise l'API créée par YTS : https://yts.to/api
#Installation

## Pré-requis
- un moteur PHP et un client torrent installés sur son serveur

## Démarches
Sous environnement UNIX :

		cd /var/www
		git clone https://github.com/MisterCyp/RuFy.git

- Ajouter les lignes suivantes dans le fichier : rutorrent.conf (si vous avez suivi un des tutos présents sur mondedie.fr)
        
         location ^~ /RuFy {
            	root /var/www;
            	index index.php;
            	
                include /etc/nginx/conf.d/php.conf;
            	include /etc/nginx/conf.d/cache.conf;
            }
- Donner les droits d'écriture à l'utilisateur www-data au dossier watch de rutorrent :
	
		chown -R VOTRE_USER:www-data /home/VOTRE_USER/watch
		chmod -R 775 /home/VOTRE_USER/watch
		
- il suffit de vous connecter avec vos accès rutorrent à l'adresse suivante : http://IP_de_votre_SERVEUR/RuFy

/!\ Attention aux Majuscules de RuFy pour le dossier. Nginx et les navigateurs sont sensibles à la casse ! /!\

## Détails 

### Changer le dossier où sont déposés les torrents

Les torrents téléchargés iront dans le dossier suivant : `/home/VOTRE_USER/watch` afin d'être reconnu par rutorrent.

Si votre dossier est différent, vous pouvez modifier le chemin dans le fichier `trait.php` à la ligne 13.

### Modifier le menu de RuFy

Pour modifier le menu de Rufy afin de supprimer ou ajouter des liens : Modifier le fichier `/include/menu-top.html`

