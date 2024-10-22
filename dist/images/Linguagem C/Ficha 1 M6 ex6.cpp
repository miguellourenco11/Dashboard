#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char n1,n2,s1[50],s2[50];
	
	printf("Introduza duas strings \n");
	scanf("%s" "%s",&s1,&s2);
	
	n1=strlen(s1);
	n2=strlen(s2);
	
	if(n1==n2)
		printf("As duas strings têm a mesma quantidade de caracteres \n");
	if(n1<n2)
		printf("A string 2 tem mais caracteres \n");
	if(n1>n2)
		printf("A string 1 tem mais caracteres \n");
	
	printf("\n");
	system("pause");
		
}
