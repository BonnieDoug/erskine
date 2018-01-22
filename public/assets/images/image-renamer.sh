## This script runs through a directory and renames them to a numbered sequence eg 1.jpg 2.jpg 3.jpg
a=1
for i in *.jpg; do
  new=$(printf "%01d.jpg" "$a")
  mv -i -- "$i" "$new"
  let a=a+1
done
