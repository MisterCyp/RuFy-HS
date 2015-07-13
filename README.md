# rufy
Projet PHP qui permet de télécharger directement sur sa seedbox les torrents de YIFY

Le projet utilise l'API créée par YTS : https://yts.to/api
#Installation

## Pré-requis
- un moteur PHP et un client torrent installé sur son serveur

## Démarches

- Copier le repository dans le dossier /var/www/rufy
- Ajouter les lignes suivantes dans le fichier : rutorrent.conf (si vous avez suivi un des tutos présents sur mondedie.fr)
        
         location ^~ /rufy {
            	root /var/www;
            	index index.php;
            	
                include /etc/nginx/conf.d/php.conf;
            	include /etc/nginx/conf.d/cache.conf;
            }
- il suffit de vous connecter avec vos accès rutorrent à l'adresse suivante : http://IP_de_mon_SERVEUR/rufy
