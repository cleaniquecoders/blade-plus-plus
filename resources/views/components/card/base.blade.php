<div class="card {{ $card_class ?? '' }}">
	@includeWhen(
		isset($card_header), 
		'blade-plus-plus::components.card.header', 
		['card_header' => $card_header, 'card_header_class' => $card_header_class]
	)
  	@includeWhen(
  		isset($card_body), 
  		'blade-plus-plus::components.card.body', 
  		['card_body' => $card_body, 'card_body_class' => $card_body_class]
	)
	@includeWhen(
		isset($card_footer), 
		'blade-plus-plus::components.card.footer', 
		['card_footer' => $card_footer, 'card_footer_class' => $card_footer_class]
	)
</div>