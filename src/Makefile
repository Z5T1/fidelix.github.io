DOCDIR=$(CURDIR)/../docs
PHP=php

PAGES=index.html

.PHONY: build clean
build: $(addprefix $(DOCDIR)/,$(PAGES))
clean:
	rm -f $(addprefix $(DOCDIR)/,$(PAGES))

$(DOCDIR)/%.html: %.php
	$(PHP) $^ > $@

