install:
	composer install --ignore-platform-req=ext-simplexml --ignore-platform-req=ext-xmlwriter

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	composer exec -v phpstan analyse -- -c phpstan.neon --ansi src bin
