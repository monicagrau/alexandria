<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'calendar', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   calendar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Evento de atividade';
$string['addevent'] = 'Adicionar eventos';
$string['advancedoptions'] = 'Opções avançadas';
$string['allday'] = 'Todo o dia';
$string['annually'] = 'Anualmente';
$string['calendar'] = 'Calendário';
$string['calendarheading'] = 'Calendário de {$a}';
$string['calendarpreferences'] = 'Preferências do calendário';
$string['calendartypes'] = 'Tipos de calendário';
$string['calendarurl'] = 'URL do calendário: {$a}';
$string['category'] = 'Categoria';
$string['categoryevent'] = 'Evento da categoria';
$string['categoryevents'] = 'Eventos da categoria';
$string['clickhide'] = 'clique para ocultar';
$string['clickshow'] = 'clique para mostrar';
$string['colactions'] = 'Ações';
$string['colcalendar'] = 'Calendário';
$string['collastupdated'] = 'Última atualização';
$string['colpoll'] = 'Atualizar';
$string['commontasks'] = 'Opções';
$string['confirmeventdelete'] = 'Tem a certeza de que pretende apagar o evento "<b>{$a}</b>"?';
$string['confirmeventseriesdelete'] = 'O evento "{$a->name}" faz parte de uma série de eventos. Pretende apagar apenas este evento ou todos os {$a>count} eventos da série?';
$string['course'] = 'Disciplina';
$string['coursecalendar'] = 'Calendário de {$a}';
$string['courseevent'] = 'Evento da disciplina';
$string['courseevents'] = 'Eventos da disciplina';
$string['courses'] = 'Disciplinas';
$string['customexport'] = 'Intervalo personalizado ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Diariamente';
$string['day'] = 'Dia';
$string['daynext'] = 'Dia seguinte';
$string['dayprev'] = 'Dia anterior';
$string['dayviewfor'] = 'Vista do dia:';
$string['dayviewtitle'] = 'Vista do dia: {$a}';
$string['daywithnoevents'] = 'Não existem eventos marcados para este dia.';
$string['default'] = 'Predefinido';
$string['deleteallevents'] = 'Apagar todos os eventos';
$string['deleteevent'] = 'Apagar evento';
$string['deleteevents'] = 'Apagar eventos';
$string['deleteoneevent'] = 'Apagar este evento';
$string['detailedmonthviewfor'] = 'Vista detalhada do mês:';
$string['detailedmonthviewtitle'] = 'Vista detalhada do mês: {$a}';
$string['durationminutes'] = 'Duração em minutos';
$string['durationnone'] = 'Sem duração';
$string['durationuntil'] = 'Até (data e hora)';
$string['editevent'] = 'A editar evento';
$string['erroraddingevent'] = 'Ocorreu um erro ao adicionar evento';
$string['errorbadsubscription'] = 'Subscrição de Calendário não encontrada.';
$string['errorbeforecoursestart'] = 'Não é possível definir eventos antes da data de início da disciplina';
$string['errorcannotimport'] = 'Não pode definir uma subscrição do calendário neste momento.';
$string['errorhasuntilandcount'] = 'Quer UNTIL ou COUNT podem aparecer numa regra de recorrência, mas UNTIL e COUNT não devem ocorrer na mesma regra de recorrência.';
$string['errorinvalidbydayprefix'] = 'Valores inteiros a preceder as regras BYDAY apenas podem aparecer em regras de recorrência MONTHLY ou YEARLY.';
$string['errorinvalidbydaysuffix'] = 'Os valores válidos para a parte do dia da semana na regra BYDAY são SE, TE, QA, QI, SE, SA e DO';
$string['errorinvalidbyhour'] = 'Os valores válidos para a regra BYHOUR são 0 a 23.';
$string['errorinvalidbyminute'] = 'Os valores válidos para a regra BYMINUTE são 0 a 59.';
$string['errorinvalidbymonth'] = 'Os valores válidos para a regra BYMONTH são 1 a 12.';
$string['errorinvalidbymonthday'] = 'Os valores válidos para a regra BYMONTHDAY são 1 a 31 ou -31 a -1.';
$string['errorinvalidbysecond'] = 'Os valores válidos para a regra BYSECOND são 1 a 59.';
$string['errorinvalidbysetpos'] = 'Os valores válidos para a regra BYSETPOS são 1 a 366 ou -366 a -1.';
$string['errorinvalidbyweekno'] = 'Os valores válidos para a regra BYWEEKNO são 1 a 53 ou -53 a -1.';
$string['errorinvalidbyyearday'] = 'Os valores válidos para a regra BYYEARDAY são 1 a 366 ou -366 a -1.';
$string['errorinvaliddate'] = 'Data inválida';
$string['errorinvalidicalurl'] = 'O URL do iCal fornecido não é válido.';
$string['errorinvalidinterval'] = 'O valor da regra INTERVAL deve ser um número inteiro positivo.';
$string['errorinvalidminutes'] = 'Especifique a duração, em minutos, indicando um número entre 1 e 999.';
$string['errorinvalidrepeats'] = 'Especifique o número de eventos indicando número entre 1 e 99.';
$string['errormustbeusedwithotherbyrule'] = 'A regra BYSETPOS deve ser usada apenas em conjunto com outra parte da regra BYxxx.';
$string['errornodescription'] = 'A descrição é obrigatória';
$string['errornoeventname'] = 'O nome é obrigatório';
$string['errornonyearlyfreqwithbyweekno'] = 'A regra BYWEEKNO só é válida para regras YEARLY.';
$string['errorrequiredurlorfile'] = 'É necessário um URL ou um ficheiro para importar um calendário.';
$string['errorrrule'] = 'A regra de recorrência parece estar incorreta.';
$string['errorrruleday'] = 'A regra de recorrência tem um parâmetro de dia inválido.';
$string['errorrrulefreq'] = 'A regra de recorrência tem um parâmetro de frequência inválido.';
$string['eventcalendareventcreated'] = 'Evento de calendário criado';
$string['eventcalendareventdeleted'] = 'Evento de calendário eliminado';
$string['eventcalendareventupdated'] = 'Evento de calendário atualizado';
$string['eventdate'] = 'Data e hora do evento';
$string['eventdescription'] = 'Descrição';
$string['eventduration'] = 'Duração';
$string['eventendtime'] = 'Hora de fim';
$string['eventendtimewrapped'] = '{$a} (Hora de fim)';
$string['eventinstanttime'] = 'Data e hora';
$string['eventkind'] = 'Tipo de evento';
$string['eventname'] = 'Designação do evento';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'Sem eventos';
$string['eventrepeat'] = 'Com repetição';
$string['events'] = 'Eventos';
$string['eventsall'] = 'Todos os eventos';
$string['eventsdeleted'] = 'Eventos eliminados';
$string['eventsfor'] = 'Eventos para {$a}';
$string['eventsimported'] = 'Eventos importados: {$a}';
$string['eventskey'] = 'Tipo de eventos';
$string['eventsource'] = 'Origem do evento';
$string['eventspersonal'] = 'Os meus eventos pessoais';
$string['eventsrelatedtocategories'] = 'Eventos relacionados com categorias';
$string['eventsrelatedtocourses'] = 'Eventos relacionados com disciplinas';
$string['eventsrelatedtogroups'] = 'Eventos relacionados com grupos';
$string['eventsskipped'] = 'Eventos ignorados: {$a}';
$string['eventstarttime'] = 'Hora de início';
$string['eventstoexport'] = 'Eventos para exportar';
$string['eventsubscriptioncreated'] = 'Criada subscrição de calendário';
$string['eventsubscriptiondeleted'] = 'Subscrição de calendário apagada';
$string['eventsubscriptioneditwarning'] = 'Este evento de calendário faz parte de uma subscrição. Todas as alterações efetuadas neste evento serão perdidas se a subscrição for apagada.';
$string['eventsubscriptionupdated'] = 'Subscrição de calendário atualizada';
$string['eventsupdated'] = 'Eventos atualizados: {$a}';
$string['eventtime'] = 'Data e hora';
$string['eventtype'] = 'Tipo de evento';
$string['eventtypecategory'] = 'da categoria';
$string['eventtypecourse'] = 'da disciplina';
$string['eventtypeglobal'] = 'globais';
$string['eventtypegroup'] = 'do grupo';
$string['eventtypemodule'] = 'do módulo';
$string['eventtypesite'] = 'site';
$string['eventtypeuser'] = 'do utilizador';
$string['eventview'] = 'Detalhes do evento';
$string['expired'] = 'Expirou';
$string['explain_site_timeformat'] = 'Pode escolher o modo de visualização das horas no formato de 12 ou 24 para todo o site. Se escolher a opção "Predefinido", o formato é escolhido automaticamente de acordo com o idioma utilizado no site. Esta configuração pode ser alterada nas preferências do utilizador.';
$string['export'] = 'Exportar';
$string['exportbutton'] = 'Exportar';
$string['exportcalendar'] = 'Exportar calendário';
$string['exporthelp'] = 'Como subscrever este calendário a partir de uma aplicação de calendário (Google/Outlook/Outro)?';
$string['forcecalendartype'] = 'Forçar calendário';
$string['fri'] = 'Sex';
$string['friday'] = 'Sexta';
$string['generateurlbutton'] = 'Obter URL do calendário';
$string['global'] = 'Global';
$string['globalevent'] = 'Evento global';
$string['globalevents'] = 'Eventos globais';
$string['gotoactivity'] = 'Ir para a atividade';
$string['gotocalendar'] = 'Ir para o calendário';
$string['group'] = 'Grupo';
$string['groupevent'] = 'Evento do grupo';
$string['groupevents'] = 'Eventos do grupo';
$string['hideeventtype'] = 'Ocultar eventos {$a}';
$string['hourly'] = 'De hora a hora';
$string['importcalendar'] = 'Importar calendário';
$string['importcalendarfrom'] = 'Importar de';
$string['importcalendarheading'] = 'Importar calendário...';
$string['importfromfile'] = 'Ficheiro de calendário (.ics)';
$string['importfrominstructions'] = 'Por favor, forneça um URL para um calendário remoto ou carregue um ficheiro.';
$string['importfromurl'] = 'URL do calendário';
$string['invalideventtype'] = 'O tipo de evento que selecionou não é válido.';
$string['invalidtimedurationminutes'] = 'A duração indicada em minutos não é válida. Indique uma duração maior que zero ou não indique duração.';
$string['invalidtimedurationuntil'] = 'A data e hora que selecionou para a duração é anterior à hora de início do evento. Corrija antes de continuar.';
$string['iwanttoexport'] = 'Exportar';
$string['less'] = 'Menos';
$string['managesubscriptions'] = 'Gerir subscrições';
$string['manyevents'] = '{$a} eventos';
$string['mon'] = 'Seg';
$string['monday'] = 'Segunda';
$string['monthly'] = 'Mensalmente';
$string['monthlyview'] = 'Eventos do mês';
$string['monthnext'] = 'Mês seguinte';
$string['monthprev'] = 'Mês anterior';
$string['monththis'] = 'Este mês';
$string['more'] = 'Mais';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Nunca';
$string['newevent'] = 'Novo evento';
$string['nocalendarsubscriptions'] = 'Não tem subscrições de calendários.';
$string['notitle'] = 'sem título';
$string['noupcomingevents'] = 'Não existem eventos futuros';
$string['oneevent'] = '1 evento';
$string['pollinterval'] = 'Atualizar intervalo';
$string['pollinterval_help'] = 'Defina a periodicidade de atualização dos novos eventos do calendário.';
$string['preferences'] = 'Preferências';
$string['preferences_available'] = 'As suas preferências pessoais';
$string['preferredcalendar'] = 'Calendário preferido';
$string['pref_lookahead'] = 'Visão prévia dos próximos eventos';
$string['pref_lookahead_help'] = 'Definir o número (máximo) de dias futuros para o início de um evento para que seja mostrado como um próximo evento. Os eventos que iniciam fora desta definição não serão mostrados como próximos eventos. Tenha em atenção que <strong>não há garantia</strong> que todos os eventos a partir deste período de tempo sejam mostrados e se existirem muitos (mais do que o definido em "Número máximo de próximos eventos"), os mais distantes não serão mostrados.';
$string['pref_maxevents'] = 'Número máximo de próximos eventos';
$string['pref_maxevents_help'] = 'Define o número máximo de eventos que podem ser exibidos. Se definir aqui um número grande, é possível que os próximos eventos ocupem muito espaço na sua disciplina.';
$string['pref_persistflt'] = 'Lembrar configurações do filtro';
$string['pref_persistflt_help'] = 'Se ativar esta opção, o Moodle recordará as configurações do seu último evento e irá utilizá-las sempre que iniciar uma sessão.';
$string['pref_startwday'] = 'Primeiro dia da semana';
$string['pref_startwday_help'] = 'As semanas dos calendários serão mostradas a começar no dia selecionado aqui.';
$string['pref_timeformat'] = 'Formato da hora';
$string['pref_timeformat_help'] = 'Pode optar por ver as horas no formato 12h ou 24h. Se escolher "Por omissão", o formato será escolhido com base no pacote linguístico em utilização.';
$string['privacy:metadata:calendar:event'] = 'A componente calendário pode armazenar detalhes de eventos do utilizador no subsistema principal.';
$string['privacy:metadata:calendar:event:description'] = 'A descrição do evento de calendário.';
$string['privacy:metadata:calendar:event:eventtype'] = 'O tipo de evento de calendário.';
$string['privacy:metadata:calendar:event:name'] = 'O nome do evento de calendário.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'A componente calendário pode armazenar detalhes de subscrições de calendário do utilizador no subsistema principal.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'O tipo de evento da subscrição do calendário.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'O nome da subscrição do calendário';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'O url da subscrição do calendário';
$string['privacy:metadata:calendar:event:timeduration'] = 'A duração do evento de calendário.';
$string['privacy:metadata:calendar:event:timestart'] = 'A data e hora de início do evento.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'O tipo de evento de calendário configurado exibe a preferência do utilizador.';
$string['recentupcoming'] = 'Dias recentes e próximos 60';
$string['repeatedevents'] = 'Eventos repetidos';
$string['repeateditall'] = 'Aplicar as alterações também aos restantes {$a} eventos desta série de eventos repetidos';
$string['repeateditthis'] = 'Aplicar as alterações apenas a este evento';
$string['repeatevent'] = 'Repetir este evento';
$string['repeatnone'] = 'Sem repetição';
$string['repeatweeksl'] = 'Repetição semanal (total de semanas)';
$string['repeatweeksr'] = 'eventos';
$string['sat'] = 'Sab';
$string['saturday'] = 'Sábado';
$string['showeventtype'] = 'Mostrar eventos de {$a}';
$string['shown'] = 'mostrado';
$string['site'] = 'Site';
$string['siteevent'] = 'Evento do site';
$string['siteevents'] = 'Eventos do site';
$string['spanningevents'] = 'Eventos a decorrer';
$string['subscriptionname'] = 'Nome do calendário';
$string['subscriptionremoved'] = 'Removida subscrição do calendário {$a}';
$string['subscriptions'] = 'Subscrições';
$string['subscriptionsource'] = 'Origem do evento: {$a->name}';
$string['subscriptionupdated'] = 'Atualizada subscrição do calendário {$a}';
$string['sun'] = 'Dom';
$string['sunday'] = 'Domingo';
$string['thu'] = 'Qui';
$string['thursday'] = 'Quinta';
$string['timeformat_12'] = '12 horas (AM/PM)';
$string['timeformat_24'] = '24 horas';
$string['timeperiod'] = 'Período de tempo';
$string['today'] = 'Hoje';
$string['todayplustitle'] = 'Hoje {$a}';
$string['tomorrow'] = 'Amanhã';
$string['tt_deleteevent'] = 'Apagar evento';
$string['tt_editevent'] = 'Editar evento';
$string['tue'] = 'Ter';
$string['tuesday'] = 'Terça';
$string['typecategory'] = 'Evento da categoria';
$string['typeclose'] = 'Fechar evento';
$string['typecourse'] = 'Evento da disciplina';
$string['typedue'] = 'Evento expirado';
$string['typegradingdue'] = 'Avaliar evento expirado';
$string['typegroup'] = 'Evento do grupo';
$string['typeopen'] = 'Abrir evento';
$string['typesite'] = 'Evento do site';
$string['typeuser'] = 'Evento do utilizador';
$string['upcomingevents'] = 'Próximos eventos';
$string['upcomingeventsfor'] = 'Próximos eventos para:';
$string['urlforical'] = 'Endereço URL para a exportação do iCalendar, para subscrever ao calendário';
$string['user'] = 'Utilizador';
$string['userevent'] = 'Evento de utilizador';
$string['userevents'] = 'Eventos do utilizador';
$string['viewupcomingactivitiesdue'] = 'Ver atividades com data limite próxima';
$string['wed'] = 'Qua';
$string['wednesday'] = 'Quarta';
$string['weekly'] = 'Semanalmente';
$string['weeknext'] = 'Próxima semana';
$string['weekthis'] = 'Esta semana';
$string['when'] = 'Quando';
$string['whendate'] = 'Quando: {$a}';
$string['yesterday'] = 'Ontem';
$string['youcandeleteallrepeats'] = 'Este evento faz parte de uma série de eventos repetitdos. Pode apagar apenas este evento ou todos os {$a} eventos da série.';
