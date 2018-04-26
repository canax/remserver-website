REM server with Anax included
==================================

This is an installation of the REM server [canax/remserver](https://github.com/canax/remserver) together with an Anax website. It can be used to quickly start up a standalone REM server for test and development.



Install
----------------------------------

There are a few ways to get the REM server up and rolling.



### Install from Git repo

Download this Git repo.

Install essential tools.

```
make install
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

There is a Docker image that has the REM server installed and ready to run.

If you have downloaded this repo you can start it with `docker-compose`.

```
docker-compose up remserver
```

You can start it anywhere you have access to `docker` and for example map the container port 80 to the local host port 10999.

```
docker run -p 10999:80 anax/dev:remserver
```



### Install as a Anax module

If you want the REM server as a Anax module to be installed together with your own Anax installation, then you should install the module itself.

Read more on the module [canax/remserver](https://github.com/canax/remserver).



How to use and documentation
----------------------------------

The starting page contains the documentation on how to use it.

You can read the documentation on the [sample installation site](https://rem.dbwebb.se) or unstyled through this Git repo in [`content/index.md`](content/index.md).



```
 .  
..:  Copyright (c) 2017-2018 Mikael Roos (mos@dbwebb.se)
```
