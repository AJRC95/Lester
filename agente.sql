create table agente(
				idAgente int,
				nombre varchar[12],
				apellido varchar[12],
				descripcion varchar[50],
				cargo varchar[10],
				telefono varchar[12],
				ciudad varchar[30]
);

create table cuenta(
				idCuenta int,
				nombre varchar[12],
				apellido varchar[12],
				correo varchar[50],
				contrasenia varchar[13]
);

create table propiedades(
				idPropiedad int,
				nombre varchar[12],
				descripcion varchar[50],
				imagen clob,
				direccion varchar[40],
				ciudad varchar[30]
);

create table ciudad(
				idCiudad int,
				nombre varchar[30],
				provincia varchar[30]
)

create table requerimiento(
				idRequerimiento int,
				nombrePersona varchar[25],
				telefono varchar[12],
				correo varchar[30],
				observaciones varchar[100],
				terminosCondiciones int,
				ofertas int
)
