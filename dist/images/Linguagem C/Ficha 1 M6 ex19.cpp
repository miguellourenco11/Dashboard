#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	char palavra[50],palavra2[50];

	printf("introduza duas palavras \n");
	scanf("%s" "%s",&palavra,&palavra2);

	int num,num2,vogais=0,vogais2=0;

	num=strlen(palavra);
	num2=strlen(palavra2);
	
	for (int i=0; i<=num; i++)
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
	
	for (int i=0; i<=num2; i++)
	{
		if(palavra2[i]=='A'||palavra2[i]=='a')
			vogais2++;
		if(palavra2[i]=='E'||palavra2[i]=='e')
			vogais2++;
		if(palavra2[i]=='I'||palavra2[i]=='i')
			vogais2++;
		if(palavra2[i]=='O'||palavra2[i]=='o')
			vogais2++;
		if(palavra2[i]=='U'||palavra2[i]=='u')
			vogais2++;
	}

	if(vogais==vogais2)
		printf("As duas palavras têm a mesma quantidade de vogais \n");
	if(vogais<vogais2)
		printf("A palavra %s tem mais vogais \n",palavra2);
	if(vogais>vogais2)
		printf("A palavra %s tem mais vogais \n",palavra);

	printf("\n");
	system("pause");
}
