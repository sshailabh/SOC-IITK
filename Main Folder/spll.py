import sys
import re
import json
from collections import Counter

def words(text): return re.findall(r'\w+', text.lower())

WORDS = Counter(words(open('dict2.txt').read()))

#print(WORDS)

def P(word, N=sum(WORDS.values())): 
    "Probability of `word`."
    return WORDS[word] / N

def correction(word): 
    "Most probable spelling correction for word."
    return max(candidates(word), key=P)

def candidates(word): 
    "Generate possible spelling corrections for word."
    return (known(["zq"+word+"zq"]) or known(edits1(word)) or ["zq"+word+"zq"])

def known(words): 
    "The subset of `words` that appear in the dictionary of WORDS."
    return set(w for w in words if w in WORDS)

def edits1(word):
    "All edits that are one edit away from `word`."
    letters    = 'abcdefghijklmnopqrstuvwxyz'
    #worsed     =["zq"+word+"zq"]
    splits     = [(word[:i], word[i:])    for i in range(len(word) + 1)]
    deletes    = [L + R[1:]               for L, R in splits if R]
    transposes = [L + R[1] + R[0] + R[2:] for L, R in splits if len(R)>1]
    replaces   = [L + c + R[1:]           for L, R in splits if R for c in letters]
    inserts    = [L + c + R               for L, R in splits for c in letters]
	
    
    for n,x in enumerate(deletes):
	     deletes[n]="zq"+x+"zq"
		 
    for n,x in enumerate(transposes):
	    transposes[n]="zq"+x+"zq"
    for n,x in enumerate(replaces):
	    replaces[n]="zq"+x+"zq"
    for n,x in enumerate(inserts):
	    inserts[n]="zq"+x+"zq" 		 
    tin=set(deletes + transposes + replaces + inserts)
   
	
    return tin

	
if __name__ == "__main__":
    word = sys.argv[1]	
    #print(known(edits1(word)))
    wordp=word.split();
    #print(wordp)
    #print(word)   
    for n,x in enumerate(wordp):
        wordp[n]=correction(wordp[n])
        wordp[n]=wordp[n][2:-2]
#print(wordp)
worf=""
for p in wordp:
    worf=worf+" "+p;   
print(worf)