
	var $input = $('input[id^="x"]');
	var $confirm = $('#inscricao');
	
	function togglecheckbox($checkbox, $bool) {
		$checkbox.prop('checked', $bool);
		$checkbox.data('waschecked', $bool);		
	}
	
	function checkinterval($checkbox1, $checkbox2) {
		var $inicio1 = new Date($checkbox1.attr('name').split('[')[1].split('|')[0].split(']')[0].replace(/-/g, "/")).getTime();
		var $fim1 = new Date($checkbox1.attr('name').split('[')[1].split('|')[1].split(']')[0].replace(/-/g, "/")).getTime();
		var $inicio2 = new Date($checkbox2.attr('name').split('[')[1].split('|')[0].split(']')[0].replace(/-/g, "/")).getTime();
		var $fim2 = new Date($checkbox2.attr('name').split('[')[1].split('|')[1].split(']')[0].replace(/-/g, "/")).getTime();
		return (!$checkbox1.is($checkbox2) && (($inicio2 < $fim1 && $inicio2 >= $inicio1) || ($inicio1 < $fim2 && $inicio1 >= $inicio2))) ? true : false;
	}
		
	$input.click(function() {
		var $arr = [];
		var $checkbox = $(this);
		
		if($checkbox.data('waschecked') == false || $checkbox.data('waschecked') == undefined) {
			togglecheckbox($checkbox, true);
			$input.each(function() {
				var $this = $(this);
				if($checkbox.attr('value') == $this.attr('value')) {
					togglecheckbox($this, true);
					$input.each(function() {
						var $that = $(this);
						if(checkinterval($this, $that) && !$this.is($that) && $this.attr('value') != $that.attr('value')) {
							$arr[$that.attr('value')] = true;
							togglecheckbox($that, false);
						}
					});
				}
			});
			
			$input.each(function() {
				var $this = $(this);
				if($arr[$this.attr('value')]) {
					togglecheckbox($this, false);
				}
			});
		}
		else {			
			togglecheckbox($checkbox, false);
			$input.each(function() {
				var $this = $(this);
				if($checkbox.attr('value') == $this.attr('value')) {
					togglecheckbox($this, false);
				}
			});
		}
		if($('input[id^="x"]:checked').length) $confirm.attr('disabled', false); else $confirm.attr('disabled', true);
	});