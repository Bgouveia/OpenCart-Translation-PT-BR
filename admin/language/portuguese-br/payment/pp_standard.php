<?php
// Heading
$_['heading_title']                         = 'PayPal Avançado';

// Text 
$_['text_payment']                          = 'Pagamento';
$_['text_success']                          = 'Módulo PayPal Avançado atualizado com sucesso!';
$_['text_pp_standard']                      = '<a onclick="window.open(\'https://www.paypal.com/pt/mrb/pal=W9TBB5DTD6QJW\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']                    = 'Autorização';
$_['text_sale']                             = 'Venda';

// Entry
$_['entry_email']                           = 'E-mail:';
$_['entry_test']                            = 'Modo de testes:';
$_['entry_transaction']                     = 'Método de transação:';
$_['entry_geo_zone']                        = 'Região geográfica:';
$_['entry_status']                          = 'Situação:';
$_['entry_sort_order']                      = 'Ordenação:';
$_['entry_pdt_token']	                    = 'PDT Token:<br/><span class="help">Pagamento de Transferência de Dados Token é utilizado para aumentar a segurança e confiabilidade. Saiba como habilitar o PDT clicando <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_paymentdatatransfer" alt="">aqui</a></span>';
$_['entry_itemized']	                    = 'Especifique os produtos:<br/><span class="help">Mostrar a lista detalhada dos produtos na fatura Paypal em vez do nome da loja.</span>';
$_['entry_debug']		                    = 'Modo de Debug:<br/><span class="help">Logs de informações adicionais para o sistema de log.</span>';
$_['entry_order_status']                    = 'Situação dos pedidos:';
$_['entry_order_status_pending']			= 'Situação do Pedido Pendente:<br /><span class="help">O pagamento está pendente, veja a variável pending_reason para mais informações. Por favor note, você receberá uma Notificação Instantânea de Pagamento quando o status das mudanças de pagamento forem concluídos, falharem, ou negados.</span>';
$_['entry_order_status_denied']				= 'Situação do Pedido Negado:<br /><span class="help">Você, o comerciante, negou o pagamento. Isso só acontecerá se o pagamento foi previamente colocado em pendência devido a uma das razões para pendência.</span>';
$_['entry_order_status_failed']				= 'Situação do Pedido que Falhou:<br /><span class="help">O pagamento falhou. Isso só acontecerá se houver tentativa de pagamento a partir de sua conta bancária pelos clientes.</span>';
$_['entry_order_status_refunded']			= 'Situação do Pedido Restituído:<br /><span class="help">Você, o comerciante, reembolsou o pagamento.</span>';
$_['entry_order_status_canceled_reversal']	= 'Situação do Pedido Invertido Cancelado:<br /><span class="help">Isto significa que uma reversão foi cancelada, por exemplo, você, o comerciante, ganhou uma disputa com o cliente e os fundos para a operação, que foi revertida foram devolvidos.</span>';
$_['entry_order_status_reversed']			= 'Situação do Pedido Invertido:<br /><span class="help">Isto significa que um pagamento foi revertido devido a um estorno ou outro tipo de inversão. Os fundos foram debitados do saldo de sua conta e retornou para o cliente. A razão para a reversão é dada pela variável reason_code.</span>';
$_['entry_order_status_unspecified']		= 'Situação do Pedido por Qualquer Erro:';

// Error
$_['error_permission']                      = 'Atenção: Você não possui permissão para modificar o pagamento PayPal Avançado!';
$_['error_email']                           = 'O campo <em>E-mail</em> é requerido!'; 
?>