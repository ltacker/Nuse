import wikipedia
import sys
import webbrowser

# Obtient le temps pour lire un article
def getTimeArt(article):
    vitesse=300
    content = article.content
    i=0
    mots=0
    l=len(content)
    while i<l:
        if content[i]==' ':
            mots=mots+1
        i=i+1
    return (int(int(mots/vitesse)+(mots/vitesse - int(mots/vitesse))*60))


# Main
nbmin = int(sys.argv[1])
bestDiff = 10000
bestTime = 0
ret = None

for i in range(2, len(sys.argv)):
    tmp = wikipedia.search(sys.argv[i])
    for tmpArtName in tmp:
        #print(tmpArtName.encode('utf-8').strip())
        #print("\n")
        try:
            tmpArt = wikipedia.page(tmpArtName.encode('utf-8').strip())
            time = getTimeArt(tmpArt)

            diff = abs(time - nbmin)
            if diff < bestDiff:
                ret = tmpArt
                bestDiff = diff
                bestTime = time
        except wikipedia.exceptions.DisambiguationError as e:
            pass

if ret is not None:
    #print(ret.title.encode('utf-8').strip())
    print("Temps de lecture l'article : " + str(bestTime) + " min")
    webbrowser.open(ret.url.encode('utf-8').strip())
