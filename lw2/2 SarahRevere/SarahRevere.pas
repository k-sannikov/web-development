PROGRAM SarahRevere(INPUT, OUTPUT);
{Печать соответствующего сообщения, зависящего от величины
 на входе: '...by land' для 1; '...by sea'  для 2;
 иначе печать сообщения об ошибке}
USES
  DOS;
VAR
  Lanterns: STRING;
BEGIN {SarahRevere}
  {Копирование QUERY_STRING в Lanterns}
  Lanterns := GetEnv('QUERY_STRING');
  WRITELN('Content-Type: text/plain');
  WRITELN;
  {Формирование сообщения}
  IF Lanterns = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Lanterns = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('The North Church shows only ''', Lanterns, '''.')
END. {SarahRevere}
