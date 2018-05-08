REM server with Anax included
==================================

[![GitHub release](https://img.shields.io/github/releases/canax/remserver-website.svg)](https://github.com/canax/remserver-website/releases)

This is a complete bundle of the Anax module REM server [canax/remserver](https://github.com/canax/remserver) together with an Anax website. It can be used to quickly start up a standalone REM server for test and development.

The REM server provides a dummy REST API with dynamic content, useful for developing and testing REST applications.



Table of content
----------------------------------

* [Live REM server](#live-rem-server)
* [How to use and documentation](#how-to-use-and-documentation)
* [Install](#install)
    * [Install from Git repo](#install-from-git-repo)
    * [Run Git repo within Docker](#run-git-repo-within-docker)
    * [Run using Docker image](#run-using-docker-image)
    * [Install as an Anax module](#install-as-an-anax-module)
    * [Install on a production server using http](#install-on-a-production-server-using-http)
    * [Install on a production server using https](#install-on-a-production-server-using-https)
    * [Update the production server](#update-the-production-server)



Live REM server
----------------------------------

Try the live service at [rem.dbwebb.se](https://rem.dbwebb.se).



How to use and documentation
----------------------------------

The starting page contains the documentation on the REM server API and how to use it.

You can read the documentation on the [sample installation site](https://rem.dbwebb.se) or unstyled through this Git repo in [`content/index.md`](content/index.md).



Install
----------------------------------

There are a few ways to get the REM server up and rolling.



### Install from Git repo

Download this Git repo.

Install essential tools.

```
make install       # Everything, including devtools
composer install   # Only essential PHP packages
```

Point your web browser to `htdocs` and you should see the documentation.



### Run Git repo within Docker

Perform the same steps as in [Install from Git repo](#install-from-git-repo).

Start a docker container that has Apache running. The file `docker-compose.yaml` is prepared with an Anax image that can be used for development and tests.

```
docker-compose up remserver-dev
```

Point your web browser to `http://localhost:10099/htdocs` and you should see the documentation.



### Run using Docker image

There is a [Docker image `anax/dev:remserver`](https://store.docker.com/community/images/anax/dev) that has the REM server website installed and ready to run.

If you have downloaded this repo you can start it with `docker-compose`. It will use the setup you have in [`docker-compose.yml`](docker-compose.yml).

```
docker-compose up remserver
```

You can start it anywhere you have access to `docker`. Run like this and map the container port 80 to the local host port 10099.

```
docker run -p 10099:80 anax/dev:remserver
```



### Install as an Anax module

If you want the REM server as a Anax module to be installed together with your own Anax installation, then you should install the module itself.

Read more on the module [canax/remserver](https://github.com/canax/remserver).



### Install on a production server using http

These are useful for development and hosting a production server.

This implies setting up its own Apache virtual host to run the website. The Git repo is used as source but copied to the production site, normally on the same machine on `$HOME/htdocs/server-name/`.

First, perform the same steps as in [Install from Git repo](#install-from-git-repo).

Then you setup the local environment on the host, to make it both a development server and a prodution server.

```text
make etc-hosts       # Create a entry in the /etc/hosts for local access.
make site-build      # Create essential directories to run as local website.
make local-publish   # Publish website to local host.
make virtual-host    # Create files for the virtual host http configuration.
```

Once these steps are performed one can view the development/production server on the local host using http://local.rem.dbwebb.se/ where "rem.dbwebb.se" is the hostname configured in the Makefile.

Update the local installation when you update the files in the repo.

```text
make local-publish   # Publish website to local host.
```



### Install on a production server using https

Perform the steps above to "[Install on a production server using http](#install-on-a-production-server-using-http)".

```text
make ssl-cert-create      # Create the HTTPS certificates.
make virtual-host-https   # Upgrade from http to https apache virtual host config files.
```

You can always revert to HTTP, If you get in trouble with the HTTPS/SSL configuration.

```text
make virtual-host    # Create files for the virtual host http configuration.
```



### Update the production server

Whenever you make changes to the repo you can update the production server by committing and pushing your changes and then update the production server through the following command.

```text
make production-publish   # Publish latest to the production server.
```


```
 .  
..:  Copyright (c) 2017-2018 Mikael Roos (mos@dbwebb.se)
```
