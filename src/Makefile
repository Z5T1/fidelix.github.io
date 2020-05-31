DOCDIR=$(CURDIR)/../docs
PHP=php

PAGES=index.html
INCLUDES=menubar.php util.php

.PHONY: build clean
build: $(addprefix $(DOCDIR)/,$(PAGES))
clean:
	rm -f $(addprefix $(DOCDIR)/,$(PAGES))

$(DOCDIR)/%.html: %.php $(INCLUDES)
	$(PHP) $< > $@

