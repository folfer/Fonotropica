$(function() {

    var $input = $("input[type='search']"),
      $clearBtn = $("button[data-search='clear']"),
      $prevBtn = $("button[data-search='prev']"),
      $nextBtn = $("button[data-search='next']"),
      $animal = $(".animal"),
      $results,
      currentClass = "current",
      offsetTop = 50,
      currentIndex = 0;
  
    /**
     * Saltar para o elemento correspondente ao currentIndex
     */
    function jumpTo() {
      if ($results.length) {
        var position,
          $current = $results.eq(currentIndex);
        $results.removeClass(currentClass);
        if ($current.length) {
          $current.addClass(currentClass);
          position = $current.offset().top - offsetTop;
          window.scrollTo(0, position);
        }
      }
    }
  
    /**
     * Procurar a palavra-chave inserida no
     * contexto especificado na entrada
     */
    $input.on("input", function() {
        var searchVal = this.value;
      $animal.unmark({
        done: function() {
          $animal.mark(searchVal, {
            separateWordSearch: true,
            done: function() {
              $results = $animal.find("mark");
              currentIndex = 0;
              jumpTo();
            }
          });
        }
      });
    });
  
    /**
     * Limpar a pesquisa
     */
    $clearBtn.on("click", function() {
      $animal.unmark();
      $input.val("").focus();
    });
  
    /**
     * Salto para a pesquisa seguinte e anterior
     */
    $nextBtn.add($prevBtn).on("click", function() {
      if ($results.length) {
        currentIndex += $(this).is($prevBtn) ? -1 : 1;
        if (currentIndex < 0) {
          currentIndex = $results.length - 1;
        }
        if (currentIndex > $results.length - 1) {
          currentIndex = 0;
        }
        jumpTo();
      }
    });
  });