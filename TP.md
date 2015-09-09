TP1
===

Implémenter les tests de la classe `ParameterBag`.


TP2
===

Implémenter les différentes classes en utilisant une méthodologie TDD.
Faites d'abord la classe `Person` puis `Enterprise` et enfin `HRDepartment`.


TP2 - Suite
===========

Nouvelle classe :

    SalaryTable
    SalaryTable::grantSalary($salary, Person $person)
    SalaryTable::getSalary(Person $person)


Changement dans les classes :

    HRDepartment::__construct(Enterprise $enterprise, SalaryTable $salaryTable)
    HRDepartment::hire(Person $person, $salary)


Ajout de méthodes :

    HRDepartment::increaseSalary(Person $person, $percentage)
    HRDepartment::getAverageSalary()
