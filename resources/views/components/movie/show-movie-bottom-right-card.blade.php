@props(['movie'])

<div class="mt-4" style="background-color: white;padding: 24px;border-radius: 4px">
    <strong><span>Box Office Theatrical Perfomance</span></strong><br>
    <div class="border-bottom" style="padding: 10px">
        - <span> Domestic Box Office</span>
        <span style="float: right">	${{ number_format($movie->domestic_box_office) }}</span>
        <br>
        - <span> International Box Office </span>
        <span style="float: right">${{ number_format($movie->international_box_office) }}</span>
    </div>
    <div style="padding: 0 10px 0 10px">
        - <span> Worldwide Box Office</span>
        <span style="float: right">${{ number_format($movie->worldwide_box_office) }}</span>


    </div>
</div>
