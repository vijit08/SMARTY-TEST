<html>
{if $Number is odd}
    <p>NUMBER IS ODD</p>
{else}
    <p>NUMBER IS EVEN</p>
{/if}
{for $var=1 to 10}
    <p>{$Number}x{$var}={$Number*$var}</p>
{/for}
</html>