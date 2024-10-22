#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	float t1;

	printf("introduza uma temperatura em graus celsius \n");
	scanf("%f",&t1);

	printf("a temperatura a passar de graus celsius para fahrenheit é %.2f \n",(9*t1)/(float)5+32);

	printf("\n");	
	system("pause");
}
