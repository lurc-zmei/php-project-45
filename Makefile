install: # установка пакетов в /vendor
		composer install

brain-games: # запуск приветствия
		./bin/brain-games

validate: # проверка файла composer.json
		composer validate

