while read LINHA
do
    echo "<li class=\"show\">$LINHA</li>"
done < $1
