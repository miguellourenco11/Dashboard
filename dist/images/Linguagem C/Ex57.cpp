#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	char palavra[50];

	printf("introduza uma palavra \n");
	scanf("%s",&palavra);

	int i,num,vogais=0;

	num=strlen(palavra);

	for (i=0; i<=num; i++)
	{
		if(palavra[i]=='A'||palavra[i]=='a')
			vogais++;
		if(palavra[i]=='E'||palavra[i]=='e')
			vogais++;
		if(palavra[i]=='I'||palavra[i]=='i')
			vogais++;
		if(palavra[i]=='O'||palavra[i]=='o')
			vogais++;
		if(palavra[i]=='U'||palavra[i]=='u')
			vogais++;
	}

	printf("A palavra tem %d vogais \n",vogais);

	printf("\n");
	system("pause");
}
