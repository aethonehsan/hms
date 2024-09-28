@if(isset($row->transactionSubscription->subscriptionPlan))
    <p class="mb-0 {{getLoggedInUser()->language == 'ar' ? 'text-start' : ''}}">{{ getAdminCurrencyFormat($row->transactionSubscription->subscriptionPlan->currency,$row->amount) }} </p>
@else
    <p class="mb-0 {{getLoggedInUser()->language == 'ar' ? 'text-start' : ''}}">{{ '$'. number_format($row->amount,2)}}</p>
@endif
