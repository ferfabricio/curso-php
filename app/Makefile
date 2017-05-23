PWD:= $(shell pwd -L)
DOCKER_RUN:= docker run --rm -v "${PWD}":/app docker.io/ferfabricio/composer7

.PHONY: test

test:
	- ${DOCKER_RUN} 'test'

update:
	- ${DOCKER_RUN} 'update'