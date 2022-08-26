@inject('date', 'App\Utilities\Date' )

@unless ($date::isWeekend())
{{ $first_name. " va travailler" }}
@else
{{ $last_name . " va t'amuser "}}
@endunless
