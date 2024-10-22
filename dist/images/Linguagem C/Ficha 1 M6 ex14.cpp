#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char s1[10],letra;
	
	printf("Introduza uma string \n");
	scanf("%s",&s1);
	
	printf("qual letra pretende procurar? \n");
	scanf("%s",&letra);
	
	int l=0;
	
	for(int i=0; i<10; i++)
	{
		if (s1[i]==letra)
			l++;
	}
	
	printf("a letra introduzida pelo utilizador foi contada %d vezes \n",l);
	
	printf("\n");
	system("pause");
		
}
