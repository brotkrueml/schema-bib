.PHONY: qa
qa: cs changelog

# See: https://github.com/crossnox/m2r2
.PHONY: changelog
changelog:
	python3 -m venv .Build/changelog
	.Build/changelog/bin/pip install setuptools m2r2
	.Build/changelog/bin/m2r2 CHANGELOG.md && \
	echo ".. _changelog:" | cat - CHANGELOG.rst > /tmp/CHANGELOG.rst && \
	mv /tmp/CHANGELOG.rst Documentation/Changelog/Index.rst && \
	rm CHANGELOG.rst

.PHONY: cs
cs: vendor
	.Build/bin/ecs --fix

.PHONE: docs
docs:
	docker run --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=Documentation

vendor: composer.json composer.lock
	composer validate
	composer install

.PHONY: yaml-lint
yaml-lint: vendor
	find -regex '.*\.ya?ml' ! -path "./.Build/*" -exec .Build/bin/yaml-lint -v {} \;

.PHONY: zip
zip:
	grep -Po "(?<='version' => ')([0-9]+\.[0-9]+\.[0-9]+)" ext_emconf.php | xargs -I {version} sh -c 'mkdir -p ../zip; git archive -v -o "../zip/$(shell basename $(CURDIR))_{version}.zip" v{version}'
