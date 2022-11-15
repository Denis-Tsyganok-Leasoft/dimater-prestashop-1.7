<style>
a.dimatersofort::after {
      display: block;
      content: "\f054";
      position: absolute;
      right: 15px;
      margin-top: -11px;
      top: 50%;
      font-family: "FontAwesome";
      font-size: 25px;
      height: 22px;
      width: 14px;
      color: #777;
}
a.dimatersofort{
      padding-left: 0px !important;
}
span.sofortlogo{
      margin-left: 15px;
}
span.sofortlogo img{
      width: 64px;
      height: auto;
}
span.soforttitle{
      padding-left: 20px;

a.dimatersofort {
      background: url({$base_dir}modules/dimatersofort/logo.png) 15px 12px no-repeat
}
</style>
<div class="row">
      <div class="col-xs-12">
            <p class="payment_module">
                  <a class="dimatersofort" href="{$link->getModuleLink('dimatersofort', 'payment')|escape:'html'}" title="{l s='Pay by Sofort' mod='dimatersofort'}">
                        <span class="sofortlogo"><img src={$base_dir}modules/dimatersofort/logo_bestelling.png></span>
                        <span class="soforttitle">{l s='Pay by Sofort' mod='dimatersofort'}<span>
                  </a>
            </p>
      </div>
</div>