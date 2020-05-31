DOCDIR=$(CURDIR)/../docs
MANDIR=$(DOCDIR)/man/master
PHP=php

PAGES=index.html about.html man/index.html handbook/index.html
MAN=man1 man2 man4 man5 man6 man7 man8
INCLUDES=menubar.php util.php

.PHONY: build clean
build: $(addprefix $(DOCDIR)/,$(PAGES)) $(MAN)
clean:
	rm -f $(addprefix $(DOCDIR)/,$(PAGES))
	rm -f $(DOCDIR)/man/man1/*

$(DOCDIR)/%.html: %.php $(INCLUDES)
	$(PHP) $< > $@

$(MANDIR) $(MANDIR)/%:
	mkdir -p $@

.PHONY: $(MAN)
man1: $(MANDIR)/man1 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man1/,$(shell ls /usr/share/man/man1)))

$(MANDIR)/man1/%.html: /usr/share/man/man1/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

man4: $(MANDIR)/man4 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man4/,$(shell ls /usr/share/man/man4)))

$(MANDIR)/man4/%.html: /usr/share/man/man4/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

man5: $(MANDIR)/man5 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man5/,$(shell ls /usr/share/man/man5)))

$(MANDIR)/man5/%.html: /usr/share/man/man5/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

man6: $(MANDIR)/man6 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man6/,$(shell ls /usr/share/man/man6)))

$(MANDIR)/man6/%.html: /usr/share/man/man6/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

man7: $(MANDIR)/man7 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man7/,$(shell ls /usr/share/man/man7)))

$(MANDIR)/man7/%.html: /usr/share/man/man7/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

man8: $(MANDIR)/man8 $(addsuffix .html,\
	$(addprefix $(MANDIR)/man8/,$(shell ls /usr/share/man/man8)))

$(MANDIR)/man8/%.html: /usr/share/man/man8/% $(INCLUDES) $(MANDIR)
	php man.php $< > $@

